<?php
// Copyright 2013 Shaun Merchant

if (!defined("IN_ESOTALK")) exit;

ET::$pluginInfo["Statuses"] = array(
	"name" => "Conversation Statuses",
	"description" => "Allow those who can moderate to set a status to conversations.",
	"version" => "0.4",
	"author" => "Shaun Merchant",
	"authorEmail" => "thestripyscarf@icloud.com",
	"authorURL" => "http://www.IWishICouldAffordADomainName.co.uk",
	"license" => "GPLv2"
);

class ETPlugin_Statuses extends ETPlugin {	
	
	public function setup($oldVersion = "") {
		$structure = ET::$database->structure();
		$structure->table("conversation")
			->column("status", "int(11) unsigned")
			->exec(false);

		return true;
	}

	public function init() {
		ET::conversationModel();
		ETConversationModel::addLabel("none", "IF(c.status = NULL,1,0)");
		ETConversationModel::addLabel("added", "IF(c.status = 1,1,0)", "icon-check");
		ETConversationModel::addLabel("considered", "IF(c.status = 2,1,0)","icon-question-sign");
		ETConversationModel::addLabel("rejected", "IF(c.status = 3,1,0)","icon-thumbs-down");
		ETConversationModel::addLabel("fixed", "IF(c.status = 4,1,0)","icon-cogs");
		ETConversationModel::addLabel("inprogress", "IF(c.status = 5,1,0)","icon-wrench");
		ETConversationModel::addLabel("notbug", "IF(c.status = 6,1,0)","icon-thumbs-up");
		ETConversationModel::addLabel("highpriority", "IF(c.status = 7,1,0)","icon-circle");
		ETConversationModel::addLabel("lowpriority", "IF(c.status = 8,1,0)","icon-circle-blank");

		ET::define("label.none", "");
		ET::define("label.added", "Lisatud");
		ET::define("label.considered", "Kaalumisel");
		ET::define("label.rejected", "Mõtetu");
		ET::define("label.fixed", "Korras");
		ET::define("label.inprogress", "Töös");
		ET::define("label.notbug", "Parandatud");
		ET::define("label.highpriority", "Väga tähtis");
		ET::define("label.lowpriority", "Oluline");
	}

	public function handler_renderBefore($sender) {
		$sender->addCSSFile($this->getResource("status.css"));
		$sender->addJSFile($this->getResource("status.js"));
	}
	
	public function handler_conversationController_renderScrubberBefore($sender, $data) {
		if(!ET::$session->user) return;
		if($data["conversation"]["canModerate"]) {
			$statuses = array(
				0 => "Staatuseta",
				1 => "Lisatud",
				2 => "Mõtlemisel",
				3 => "Mõtetu",
				4 => "Parandatud",
				5 => "Töös",
				6 => "Väga hea",
				7 => "Väga tähtis",
				8 => "Oluline"
			);
			$statuses_icons = array(
				0 => "warning-sign",
				1 => "check",
				2 => "question-sign",
				3 => "thumbs-down",
				5 => "wrench",
				4 => "cogs",
				6 => "thumbs-up",
				7 => "circle",
				8 => "circle-blank"
			);
			$statuses_seperators = array(
				0 => true,
				3 => true,
				6 => true
			);
			$max = sizeof($statuses);
			$controls = "<ul id='conversationStatusControls' class='statuscontrols'>";
			for($i = 0; $i < $max; $i++) {
				$controls = $controls . "<li><a href='". URL("conversation/status/". $data["conversation"]["conversationId"] .
											"?status=". $i .
											"&token=". ET::$session->token .
											"&return=". urlencode(ET::$controller->selfURL)) .
											"' title='". T($statuses[$i]) ."'>
									<i class='icon-". $statuses_icons[$i] ."'></i> 
									<span>". $statuses[$i] . "</span>
								</a></li>";
				if($statuses_seperators[$i] === true) {
					$controls = $controls . "<li class='sep'></li>";	
				}
			}
			echo $controls . "</ul>";
		} else {
			return;	
		}
	}
	
	public function conversationController_status($sender, $conversationId) {
		if (!$sender->validateToken()) return;
	
		$conversation = ET::conversationModel()->getById((int)$conversationId);
														  
		if(!$conversation || !$conversation["canModerate"]) {
			$sender->renderMessage(T("Error"), T("message.noPermission"));
			return false;
		}

		$model = ET::conversationModel();
		$model->updateById($conversationId, array("status" => $_GET["status"]));

/*
	$pooleli = !$conversation["status"];
	$this->setistaatust($conversationId, ET::$session->userId, array("status" => $pooleli));
	$this->addOrRemoveLabel($conversationId, "status", $pooleli);
	$conversation["status"] = $pooleli;
*/
		redirect(URL(R("return", conversationURL ($conversationId))));


	}

 function setistaatust(&$conversation, $memberId, $pooleli)
{
	$pooleli = (bool)$pooleli;
	$mudel = ET::conversationModel();
	$mudel->setStatus($conversation["conversationId"], $memberId, array("pooleli" => $pooleli));	#conversationModel
	$mudel->addOrRemoveLabel($conversation, "pooleli", $pooleli);					#conversationModel
	$conversation["pooleli"] = $pooleli;
}

 function addOrRemoveLabel(&$conversation, $label, $add = true)
{
        if ($add and !in_array($label, $conversation["labels"]))
                $conversation["labels"][] = $label;
        elseif (!$add and ($k = array_search($label, $conversation["labels"])) !== false)
                unset($conversation["labels"][$k]);
}



#$this->setStatus andis erori  Call to undefined method ETPlugin_Statuses::setStatus() 
/*
ehk siis kutsudes välja sama klassi
*/
}
