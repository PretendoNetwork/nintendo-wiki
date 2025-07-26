<?php

class Breadcrumbs {
	public static function onBeforePageDisplay($out, $skin) {
		$title = $out->getTitle();

		if ($title->getNamespace() === NS_MAIN && strpos($title->getText(), "/") !== false) {
			$parts = explode("/", $title->getText());
			$simpleTitle = end($parts);
			$out->setPageTitle($simpleTitle);

			$breadcrumbs = self::generateBreadcrumbs($parts);
			$out->prependHTML($breadcrumbs);
			$out->addModules(["ext.breadcrumbs"]);
		}

		return true;
	}

	private static function generateBreadcrumbs($parts) {
		$breadcrumbs = [];

		foreach ($parts as $index => $part) {
			$pathParts = array_slice($parts, 0, $index + 1);
			$fullPath = implode("/", $pathParts);

			if ($index === count($parts) - 1) {
				array_push($breadcrumbs, sprintf("<span class=\"breadcrumb-current\">%s</span>", htmlspecialchars($part)));
			} else {
				array_push($breadcrumbs, sprintf(
					"<a href=\"%s\">%s</a>",
					htmlspecialchars(Title::newFromText($fullPath)->getLocalURL()),
					htmlspecialchars($part)
				));
			}
		}

		return sprintf(
			"<div class=\"breadcrumb-nav\">%s</div>",
			implode(" <span class=\"breadcrumb-separator\">&gt;</span> ", $breadcrumbs)
		);
	}
}