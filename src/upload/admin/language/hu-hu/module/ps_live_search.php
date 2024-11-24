<?php
// Heading
$_['heading_title']                        = 'Playful Sparkle - Live Search';
$_['heading_fix']                          = 'Gyakori hibák javítása';
$_['heading_getting_started']              = 'Kezdő lépések';
$_['heading_setup']                        = 'Live Search beállítása';
$_['heading_troubleshot']                  = 'Gyakori hibakeresési lépések';
$_['heading_faq']                          = 'GYIK';
$_['heading_contact']                      = 'Terméktámogatás';

// Text
$_['text_extension']                       = 'Bővítmények';
$_['text_success']                         = 'Siker: A Live Search modul módosítása megtörtént!';
$_['text_filter_success']                  = 'Siker: A felhasználatlan szűrők sikeresen eltávolítva!';
$_['text_edit']                            = 'Live Search Modul szerkesztése';
$_['text_getting_started']                 = '<p><strong>Áttekintés:</strong> A Playful Sparkle - Live Search egy fejlett kereső bővítmény az OpenCart 3.x számára, amely dinamikusan mutatja a keresési eredményeket egy legördülő menüben, miközben a felhasználó gépel. Támogatja a termékek, kategóriák, gyártók és információs oldalak keresését, testreszabható mini képméretekkel, leírás hosszúságokkal és késleltetési beállításokkal az optimális felhasználói élmény érdekében.</p><p><strong>Követelmények:</strong> OpenCart 3.x+, PHP 7.3</p>';
$_['text_setup']                           = '<ul><li><strong>Általános beállítások:</strong> Állítsa be a bemeneti késleltetést (alapértelmezett: 100 ms), hogy vezérelje a billentyűleütések és a keresési eredmények megjelenítése közötti időt.</li><li><strong>Termékbeállítások:</strong><ul><li>A termék keresési eredmények engedélyezése/letiltása.</li><li>A termékleírások megjelenítésének engedélyezése/letiltása; állítsa be a maximális leírás hosszúságot (alapértelmezett: 100 karakter).</li><li>A termékek mini képeinek engedélyezése/letiltása; állítsa be a mini kép szélességét és magasságát (min: 16 px, max: 128 px).</li></ul></li><li><strong>Kategória beállítások:</strong><ul><li>A kategória keresési eredmények engedélyezése/letiltása.</li><li>A kategória mini képeinek engedélyezése/letiltása; állítsa be a mini képek méreteit (min: 16 px, max: 128 px).</li></ul></li><li><strong>Gyártói beállítások:</strong><ul><li>A gyártói keresési eredmények engedélyezése/letiltása.</li><li>A gyártói mini képek engedélyezése/letiltása; állítsa be a mini képek méreteit (min: 16 px, max: 128 px).</li></ul></li><li><strong>Információs oldal beállítások:</strong><ul><li>Az információs oldal keresési eredmények engedélyezése/letiltása.</li></ul></li></ul>';
$_['text_troubleshot']                     = '<ul><li><strong>A keresés nem működik:</strong> Frissítse a módosítási gyorsítótárat, ellenőrizze a bemeneti késleltetési beállítást, és győződjön meg arról, hogy a modul engedélyezve van.</li><li><strong>Bizonyos eredmények (Termék, Kategória, Gyártó, Információ) hiányoznak:</strong> Ellenőrizze, hogy a megfelelő eredménykategória engedélyezve van-e a beállításokban.</li></ul>';
$_['text_faq']                             = '<details><summary>Mi az alapértelmezett bemeneti késleltetés?</summary> Az alapértelmezett bemeneti késleltetés 100 milliszekundumra van beállítva.</details><details><summary>Hogyan állíthatom be a maximális mini kép méretet?</summary> A mini képek méretei 16 és 128 pixel között állíthatók be szélesség és magasság esetén.</details><details><summary>Hogyan korlátozhatom a termékleírás hosszúságát?</summary> A leírás hosszúsága a beállításokban állítható; az alapértelmezett 100 karakter.</details><details><summary>Miért nem jelennek meg bizonyos eredmények a legördülő menüben?</summary> Győződjön meg arról, hogy a konkrét eredménytípus (Termék, Kategória, Gyártó vagy Információ) engedélyezve van a modul beállításaiban.</details>';
$_['text_contact']                         = '<p>További segítségért kérjük, lépjen kapcsolatba támogatási csapatunkkal:</p><ul><li><strong>Kapcsolat:</strong> <a href="mailto:%s">%s</a></li><li><strong>Dokumentáció:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Felhasználói dokumentáció</a></li></ul>';

// Tab
$_['tab_general']                          = 'Általános';
$_['tab_products']                         = 'Termékek';
$_['tab_categories']                       = 'Kategóriák';
$_['tab_manufacturers']                    = 'Gyártók';
$_['tab_informations']                     = 'Információk';
$_['tab_help_and_support']                 = 'Segítség &amp; Támogatás';

// Entry
$_['entry_status']                         = 'Állapot';
$_['entry_input_delay']                    = 'Bemeneti késleltetés';
$_['entry_product_status']                 = 'Termékek megjelenítése';
$_['entry_category_status']                = 'Kategóriák megjelenítése';
$_['entry_category_image']                 = 'Kategória kép megjelenítése';
$_['entry_category_image_size']            = 'Kategória kép mérete (Sz x M)';
$_['entry_manufacturer_status']            = 'Gyártók megjelenítése';
$_['entry_manufacturer_image']             = 'Gyártó kép megjelenítése';
$_['entry_manufacturer_image_size']        = 'Gyártó kép mérete (Sz x M)';
$_['entry_information_status']             = 'Információk megjelenítése';
$_['entry_product_description']            = 'Termékleírás megjelenítése';
$_['entry_product_description_length']     = 'Termékleírás hossza';
$_['entry_product_image']                  = 'Termék kép megjelenítése';
$_['entry_product_image_size']             = 'Termék kép mérete (Sz x M)';
$_['entry_width']                          = 'Szélesség';
$_['entry_height']                         = 'Magasság';
$_['entry_input_min_chars']                = 'Min. karakter';

// Button
$_['button_fix_event_handler']             = 'Eseménykezelő javítása';

// Help
$_['help_input_delay']                     = 'Ez a beállítás meghatározza a késleltetési időt (ezredmásodpercben), amely a felhasználó billentyűleütése és az adatok kiszolgálóhoz történő küldése között telik el. Ennek a késleltetésnek a növelése csökkentheti a gyors gépelés során küldött kérések számát, javítva a teljesítményt és a kiszolgáló válaszidejét.';
$_['help_product_description_length']      = 'Adja meg a termékleírás maximális karakter számát. Ez a beállítás határozza meg, hogy hány karakter jelenik meg a live search eredmények között.';
$_['help_input_min_chars']                 = 'Adja meg a minimum karakterek számát, amely szükséges, mielőtt a keresési lekérdezés a szerverre kerülne.';

// Error
$_['error_permission']                     = 'Figyelmeztetés: Nincs engedélye a Live Search modul módosítására!';
$_['error_form']                           = 'A űrlap hibákat tartalmaz. Kérjük, javítsa ki a kiemelt mezőket.';
$_['error_input_delay_min']                = 'A bemeneti késleltetésnek legalább 100 milliszekundumnak kell lennie.';
$_['error_product_description_length_min'] = 'A termékleírás hossza nem lehet kevesebb, mint 0 karakter.';
$_['error_product_description_length_max'] = 'A termékleírás hossza nem haladhatja meg a 200 karaktert.';
$_['error_product_image_width_min']        = 'A termék képének szélessége legalább 16 pixel kell, hogy legyen.';
$_['error_product_image_width_max']        = 'A termék képének szélessége legfeljebb 128 pixel lehet.';
$_['error_product_image_height_min']       = 'A termék képének magassága legalább 16 pixel kell, hogy legyen.';
$_['error_product_image_height_max']       = 'A termék képének magassága legfeljebb 128 pixel lehet.';
$_['error_category_image_width_min']       = 'A kategória képének szélessége legalább 16 pixel kell, hogy legyen.';
$_['error_category_image_width_max']       = 'A kategória képének szélessége legfeljebb 128 pixel lehet.';
$_['error_category_image_height_min']      = 'A kategória képének magassága legalább 16 pixel kell, hogy legyen.';
$_['error_category_image_height_max']      = 'A kategória képének magassága legfeljebb 128 pixel lehet.';
$_['error_manufacturer_image_width_min']   = 'A gyártó képének szélessége legalább 16 pixel kell, hogy legyen.';
$_['error_manufacturer_image_width_max']   = 'A gyártó képének szélessége legfeljebb 128 pixel lehet.';
$_['error_manufacturer_image_height_min']  = 'A gyártó képének magassága legalább 16 pixel kell, hogy legyen.';
$_['error_manufacturer_image_height_max']  = 'A gyártó képének magassága legfeljebb 128 pixel lehet.';
$_['error_input_min_chars']                = 'A karakterek minimális hossza nem lehet kevesebb mint 1 karakter.';
