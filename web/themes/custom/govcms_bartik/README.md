# DRUPAL GOVCMS

## COMPOSER

* Install all modules via composer.
* Check the `composer.json` file in the main root folder. The following modules are required:

    * Admin Toolbar `https://www.drupal.org/project/admin_toolbar`
    * Chaos Tools `https://www.drupal.org/project/ctools`
    * Editor Advanced Link `https://www.drupal.org/project/editor_advanced_link`
    * Metatag `https://www.drupal.org/project/metatag`
    * Paragraphs `https://www.drupal.org/project/paragraphs`
    * Pathauto `https://www.drupal.org/project/pathauto`
    * Token `https://www.drupal.org/project/token`
    * Twig Tweak `https://www.drupal.org/project/twig_tweak`
* Twig Debugger `https://www.drupal.org/project/twig_debugger`
* Webform `https://www.drupal.org/project/webform`

## Editing tips

The theme exposes a number of paragraph types (intro blocks, tabs, accordions, tiles and more).
When creating content:

1. **Intro Paragraph** – Displays a page heading with an optional background image and buttons.
2. **Text and Cards / Tiles** – Use these to display small promo cards or tile grids.
3. **Tabs or Accordions** – Useful for FAQs and long-form content that needs to be collapsed.

Taxonomy terms such as **Region** and **Program Type** appear as small labels. Ensure these vocabularies are kept up‑to‑date so editors can easily select the correct terms.

Colors are controlled via CSS variables in `css/variables.css`. Update those variables rather than using inline styles where possible.

The theme also ships with a custom two-column layout. Enable Drupal's Layout Builder module and choose "Two column" when arranging content for a drag-and-drop editing experience.
