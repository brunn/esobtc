<?php
/*
myplugin/resources/kujundus.css content

.label-ootel, .gambit-ootel {color:blue !important;}
.label-probleem, .gambit-probleem {color:#AD1721 !important;}
*/

if (!defined("IN_ESOTALK")) exit;

ET::$pluginInfo["Ootel"] = array(
	"name" => "Ootel",
	"description" => "Lisab postitusele märke ootel, kuvab aruteludes ikooni, võimaldab otsida märke põhjal. Märge lisatakse arutelu seadete menüü kaudu.",
	"version" => "1.1",
	"author" => "Björn Kass",
	"authorEmail" => "bjorn.kass@gmail.com",
	"authorURL" => "http://www.brunn.ee",
	"license" => "GPL"
);

class ETPlugin_Ootel extends ETPlugin {

	public function setup($oldVersion = "")
	{/*sai vahetatud proge versioon ja tehti ka tabel baasi,ilma selleta tuli blank leht*/
		$structure = ET::$database->structure();
		$structure->table("conversation")
			  ->column("ootel", "int(11) unsigned")
			  ->exec(false);

		$structure->table("conversation")
			  ->column("probleem", "int(11) unsigned")
			  ->exec(false);
		return true;
	}

	public function init()
	{
		ET::conversationModel();
		ETConversationModel::addLabel("ootel", "IF(c.ootel,1,0)", "icon-glass");
		ET::define("label.ootel", "Arutelu on ootel");
		ETConversationModel::addLabel("probleem", "IF(c.probleem,1,0)", "icon-warning-sign");
		ET::define("label.probleem", "On esinenud probleeme");
	}

	public function handler_renderBefore($sender)
	{
		$sender->addCSSFile($this->getResource("kujundus.css"));
	}

	public function handler_conversationController_formatPostForTemplate($sender, &$formatted, $post, $conversation)
	{
	/*
	conversation ootel ja probleem on mõlemad vastusega 1, kui aga oleks postituse idga siis läheb rohkem answers manu.
	pealegi ei peagi olema 1 või 0 võib ka olla suurem kui null ja null.
	*/
		if ($post["deleteMemberId"]) return;
		if ($conversation["ootel"] == 1) {
		#addToArray($formatted["info"], "<span class='label label-ootel'><i class='icon-glass'></i> ".T("Ootel")."</span>", 100);
		}
		if ($conversation["probleem"] == 1) {
		#addToArray($formatted["info"], "<span class='label label-probleem'><i class='icon-warning-sign'></i> ".T("On esinenud probleeme")."</span>", 100);
		}
	}

	public function handler_conversationsController_init($sender)
	{
		ET::searchModel(); 
		ETSearchModel::addGambit('return $term == strtolower(T("gambit.ootel"));', array($this, "ootelotsingufnc"));
		ETSearchModel::addGambit('return $term == strtolower(T("gambit.probleem"));', array($this, "probleemotsingufnc"));
	}

	public function handler_conversationsController_constructGambitsMenu($sender, &$gambits)
	{
		addToArrayString($gambits["main"], T("gambit.ootel"), array("gambit-ootel", "icon-glass"));
		addToArrayString($gambits["main"], T("gambit.probleem"), array("gambit-probleem", "icon-warning-sign"));
	}
	public static function ootelotsingufnc(&$search, $term, $negate)
	{
		$search->sql->where("ootel=".($negate ? "0" : "1"));
	}
	public static function probleemotsingufnc(&$search, $term, $negate)
	{
		$search->sql->where("probleem=".($negate ? "0" : "1"));
	}
}


/*
Add to file:  addons/languages/English/definitions.php
#Otsinguvormi tõlge
$definitions["gambit.ootel"]="Ootel";
$definitions["gambit.probleem"]="Probleemid";

Add to file: core/models/ETConversationModel.class.php:

public function setipooleli(&$conversation, $memberId, $pooleli)
{
	$pooleli = (bool)$pooleli;
	$this->setStatus($conversation["conversationId"], $memberId, array("pooleli" => $pooleli));
	$this->addOrRemoveLabel($conversation, "pooleli", $pooleli);
	$conversation["pooleli"] = $pooleli;
}

Add to file: core/controllers/ETConversationController.class.php:

	public function ootele($conversationId)
	{
	$aruteluid = ET::SQL()
		->select("ootel")
		->from("conversation")
		->where("conversationid",$conversationId)
		->exec()
		->result();

		$model = ET::conversationModel();
		if($aruteluid==0){
		$model->updateById($conversationId, array("ootel" => 1));
		}else{
		$model->updateById($conversationId, array("ootel" => 0));
		}

		// menu swith on/off
		$pooleli = !$conversation["pooleli"];
		ET::conversationModel()->setipooleli($conversation, ET::$session->userId, $pooleli);

		if ($this->responseType === RESPONSE_TYPE_DEFAULT) {
			redirect(URL(R("return", conversationURL($conversation["conversationId"], $conversation["title"]))));
		}

	}

Add in to file in the: if ($conversation["canModerate"]) row 251: core/controllers/ETConversationController.class.php:

$controls->add("ootel", "<a href='".URL("conversation/ootele/".$conversation["conversationId"]."/?
token=".ET::$session->token."&return=".urlencode($this->selfURL))."' id='control-glass'>
<i class='icon-glass'></i> <span>".T($conversation["ootel"] ? "Eemalda ootel" : "Pane ootele")."</span></a>");


*/
