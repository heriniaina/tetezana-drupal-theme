<?php

/**
 * @file
 * Bartik's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template normally located in the
 * modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['featured']: Items for the featured region.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['triptych_first']: Items for the first triptych.
 * - $page['triptych_middle']: Items for the middle triptych.
 * - $page['triptych_last']: Items for the last triptych.
 * - $page['footer_firstcolumn']: Items for the first footer column.
 * - $page['footer_secondcolumn']: Items for the second footer column.
 * - $page['footer_thirdcolumn']: Items for the third footer column.
 * - $page['footer_fourthcolumn']: Items for the fourth footer column.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see bartik_process_page()
 * @see html.tpl.php
 */
?>

<div class="external">
    <div class="internal">
        <div class="internal-top">
            <div class="braincode-logo">
                <a href="/index.php" class="logo"></a>
            </div>
        </div>
        <div class="background">
            <div class="wrapper">
                <div class="main-box">
                    <div class="main-box-floating">
                        <?php if ($main_menu): ?>
                            <div class="main-menu">
                                <?php print theme('links__system_main_menu', array(
                                    'links' => $main_menu,
                                    'attributes' => array(
                                        'id' => 'main-menu-links',
                                        'class' => array('links', 'clearfix'),
                                    ),
                                    'heading' => array(
                                        'text' => t('Main menu'),
                                        'level' => 'h2',
                                        'class' => array('element-invisible'),
                                    ),
                                )); ?>
                            </div> <!-- /#main-menu -->
                        <?php endif; ?>

                        <div class="slideshow">
                            <?php print render($page['slideshow']); ?>
                        </div>
                        <div class="sub-header">
                            <div class="sub-header-left">
                                <div class="bannergroup">
                                    <div class="banneritem">
                                        <img
                                            src="http://tetezanaonlus.org/images/banners/PONTE.png"
                                            alt="Tetezana">
                                        <div class="clr"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-header-right">
                                <form action="index.php" method="post"
                                      class="search">
                                    <div
                                        class="mod_search_searchword_container">
                                        <input name="searchword"
                                               id="mod_search_searchword"
                                               maxlength="20" class="inputbox"
                                               type="text"></div>
                                    <input type="submit" class="submit"
                                           value="CERCA">
                                    <input type="hidden" name="option"
                                           value="com_search">
                                    <input type="hidden" name="task"
                                           value="search">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-content">
                    <div class="left-column">
                        <div class="newsflash">
                            <p>
                                <a href="/index.php/home/news/22-da-malgasci-in-madagascar-a-malgasci-in-italia-ii-edizione"
                                   rel="alternate"><img
                                        src="/images/news/Invito04-03-2016.jpg"
                                        alt="" width="170" height="96"></a></p>
                        </div>
                        <ul class="nav menu">
                            <li class="item-120"><a
                                    href="/index.php/connessione">Connessione</a>
                            </li>
                        </ul>
                    </div>
                    <div class="center-column" id="center-right">
                        <div id="system-message-container">
                        </div>
                        <div class="item-page" itemscope="">

                        <?php print render($page['content']); ?>
                        </div>
                        <div class="newsflash">
                            <h4 class="newsflash-title newstitle">
                                Il progetto biblioteca "“Ny bokiko no tokiko,
                                arovako fa lovako” </h4>
                            <p><img src="/images/news/biblio1.jpg" alt=""
                                    width="70" height="127" align="left"
                                    border="0">&nbsp;</p>
                            <p>In Madagascar l’accessibilità ai libri è
                                difficoltosa, sia per i bambini che per gli
                                adulti; è difficile non solo produrre libri (per
                                via degli alti costi di realizzazione in loco),
                                ma anche distribuirli e diffonderli tra la
                                popolazione che non è abituata a leggere. È
                                difficile anche il loro acquisto . <br>Da questa
                                esperienza nasce il progetto “<strong>Ny bokiko
                                    no tokiko, arovako fa lovako</strong>” che
                                si prefigge di realizzare una “<em>biblioteca
                                    itinerante</em>” che porta i libri da una
                                zona all'altra della periferia per renderli più
                                facilmente usufruibili.</p>
                            <a class="readon"
                               href="/index.php/home/news/18-il-progetto-biblioteca-ny-bokiko-no-tokiko-arovako-fa-lovako">Leggi
                                tutto...</a>
                            <h4 class="newsflash-title newstitle">
                                Mercatino di Natale </h4>
                            <p>E'disponibile l'artigianato inviato dai nostri
                                referenti in Madagascar per raccogliere fondi
                                per sostenere i bambini , se siete interessati
                                non esitare a scriverci o chiamarci&nbsp;<br>click
                                qui per i <a
                                    href="/index.php/chi-siamo/contatti">contatti</a>&nbsp;
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-background"></div>
        <div class="bottom-site">
            <div class="bottom-site-left">
            </div>
            <div class="bottom-site-right">
                <p><a href="http://www.braincode.it" target="_blank"
                      title="Template Joomla, da PSD a Joomla">Template
                        Joomla</a> Realizzato per <a href="http://www.joomla.it"
                                                     title="joomla.it">www.joomla.it</a>
                </p>
                <p>Grafica e conversione in template Joomla <a
                        href="http://www.braincode.it"
                        title="Gli artigiani del codice" target="_blank">braincode</a>
                    - <a href="http://www.braincode.it" target="_blank"
                         title="Componenti Joomla, Sviluppo componenti Joomla, Creazione componenti Joomla">Sviluppo
                        componenti Joomla</a> - <a
                        href="http://www.braincode.it" target="_blank"
                        title="Sviluppo siti web Joomla!, siti web con joomla">Siti
                        web Joomla</a></p>
            </div>
        </div>
    </div>
</div>


<?php /*
<div id="page-wrapper"><div id="page">

  <div id="header" class="<?php print $secondary_menu ? 'with-secondary-menu': 'without-secondary-menu'; ?>"><div class="section clearfix">

    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>

    <?php if ($site_name || $site_slogan): ?>
      <div id="name-and-slogan"<?php if ($hide_site_name && $hide_site_slogan) { print ' class="element-invisible"'; } ?>>

        <?php if ($site_name): ?>
          <?php if ($title): ?>
            <div id="site-name"<?php if ($hide_site_name) { print ' class="element-invisible"'; } ?>>
              <strong>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </strong>
            </div>
          <?php else: // Use h1 when the content title is empty  ?>
            <h1 id="site-name"<?php if ($hide_site_name) { print ' class="element-invisible"'; } ?>>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
            </h1>
          <?php endif; ?>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <div id="site-slogan"<?php if ($hide_site_slogan) { print ' class="element-invisible"'; } ?>>
            <?php print $site_slogan; ?>
          </div>
        <?php endif; ?>

      </div> <!-- /#name-and-slogan -->
    <?php endif; ?>

    <?php print render($page['header']); ?>

    <?php if ($main_menu): ?>
      <div id="main-menu" class="navigation">
        <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'id' => 'main-menu-links',
            'class' => array('links', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </div> <!-- /#main-menu -->
    <?php endif; ?>

    <?php if ($secondary_menu): ?>
      <div id="secondary-menu" class="navigation">
        <?php print theme('links__system_secondary_menu', array(
          'links' => $secondary_menu,
          'attributes' => array(
            'id' => 'secondary-menu-links',
            'class' => array('links', 'inline', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Secondary menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </div> <!-- /#secondary-menu -->
    <?php endif; ?>

  </div></div> <!-- /.section, /#header -->

  <?php if ($messages): ?>
    <div id="messages"><div class="section clearfix">
      <?php print $messages; ?>
    </div></div> <!-- /.section, /#messages -->
  <?php endif; ?>

  <?php if ($page['featured']): ?>
    <div id="featured"><div class="section clearfix">
      <?php print render($page['featured']); ?>
    </div></div> <!-- /.section, /#featured -->
  <?php endif; ?>

  <div id="main-wrapper" class="clearfix"><div id="main" class="clearfix">

    <?php if ($breadcrumb): ?>
      <div id="breadcrumb"><?php print $breadcrumb; ?></div>
    <?php endif; ?>

    <?php if ($page['sidebar_first']): ?>
      <div id="sidebar-first" class="column sidebar"><div class="section">
        <?php print render($page['sidebar_first']); ?>
      </div></div> <!-- /.section, /#sidebar-first -->
    <?php endif; ?>

    <div id="content" class="column"><div class="section">
      <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="title" id="page-title">
          <?php print $title; ?>
        </h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>

    </div></div> <!-- /.section, /#content -->

    <?php if ($page['sidebar_second']): ?>
      <div id="sidebar-second" class="column sidebar"><div class="section">
        <?php print render($page['sidebar_second']); ?>
      </div></div> <!-- /.section, /#sidebar-second -->
    <?php endif; ?>

  </div></div> <!-- /#main, /#main-wrapper -->

  <?php if ($page['triptych_first'] || $page['triptych_middle'] || $page['triptych_last']): ?>
    <div id="triptych-wrapper"><div id="triptych" class="clearfix">
      <?php print render($page['triptych_first']); ?>
      <?php print render($page['triptych_middle']); ?>
      <?php print render($page['triptych_last']); ?>
    </div></div> <!-- /#triptych, /#triptych-wrapper -->
  <?php endif; ?>

  <div id="footer-wrapper"><div class="section">

    <?php if ($page['footer_firstcolumn'] || $page['footer_secondcolumn'] || $page['footer_thirdcolumn'] || $page['footer_fourthcolumn']): ?>
      <div id="footer-columns" class="clearfix">
        <?php print render($page['footer_firstcolumn']); ?>
        <?php print render($page['footer_secondcolumn']); ?>
        <?php print render($page['footer_thirdcolumn']); ?>
        <?php print render($page['footer_fourthcolumn']); ?>
      </div> <!-- /#footer-columns -->
    <?php endif; ?>

    <?php if ($page['footer']): ?>
      <div id="footer" class="clearfix">
        <?php print render($page['footer']); ?>
      </div> <!-- /#footer -->
    <?php endif; ?>

  </div></div> <!-- /.section, /#footer-wrapper -->

</div></div> <!-- /#page, /#page-wrapper -->
*/
