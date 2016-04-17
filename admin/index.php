<?php
/**
 * Module: RandomQuote
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 *
 * PHP version 5
 *
 * @category        Module
 * @package         Randomquote
 * @author          XOOPS Development Team, Mamba
 * @copyright       2001-2016 XOOPS Project (http://xoops.org)
 * @license         GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @link            http://xoops.org/
 * @since           2.0.0
 */

include_once __DIR__ . '/admin_header.php';
//count "total citas"
$count_quotes = $quotesHandler->getCount();
// InfoBox citas
$adminMenu->addInfoBox(_AM_RANDOMQUOTE_STATISTICS);
// InfoBox citas
$adminMenu->addInfoBoxLine(_AM_RANDOMQUOTE_STATISTICS, _AM_RANDOMQUOTE_THEREARE_CITAS, $count_quotes);
// Render Index
echo $adminMenu->addNavigation(basename(__FILE__));
echo $adminMenu->renderIndex();
include_once __DIR__ . '/admin_footer.php';
