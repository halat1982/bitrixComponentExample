<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Localization\Loc;

$arComponentDescription = [
    "NAME" => Loc::getMessage("ITTOWER_COMPONENT_NAME"),
    "DESCRIPTION" => Loc::getMessage("ITTOWER_COMPONENT_DESCRIPTION"),
    "COMPLEX" => "N",
    "PATH" => [
        "ID" => Loc::getMessage("ITTOWER_COMPONENT_PATH_ID"),
        "NAME" => Loc::getMessage("ITTOWER_COMPONENT_PATH_NAME"),
        "CHILD" => [
            "ID" => Loc::getMessage("ITTOWER_COMPONENT_CHILD_PATH_ID"),
            "NAME" => GetMessage("ITTOWER_COMPONENT")
        ]
    ],
    "CACHE_PATH" => "Y",
];
?>