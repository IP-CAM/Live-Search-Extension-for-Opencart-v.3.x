<?php
// Heading
$_['heading_title']                        = 'Playful Sparkle - Live Search';
$_['heading_fix']                          = 'Oprava bežných chýb';
$_['heading_getting_started']              = 'Začíname';
$_['heading_setup']                        = 'Nastavenie Live Search';
$_['heading_troubleshot']                  = 'Bežné problémy';
$_['heading_faq']                          = 'Často kladené otázky';
$_['heading_contact']                      = 'Kontaktujte podporu';

// Text
$_['text_extension']                       = 'Rozšírenia';
$_['text_success']                         = 'Úspech: Modifikovali ste modul Live Search!';
$_['text_filter_success']                  = 'Úspech: Nepoužívané filtre boli úspešne odstránené!';
$_['text_edit']                            = 'Upraviť modul Live Search';
$_['text_getting_started']                 = '<p><strong>Prehľad:</strong> Playful Sparkle - Live Search je pokročilé vyhľadávacie rozšírenie pre OpenCart 3.x, navrhnuté na dynamické zobrazovanie výsledkov vyhľadávania v rozbaľovacej ponuke, zatiaľ čo používateľ píše. Podporuje vyhľadávanie produktov, kategórií, výrobcov a informačných stránok s prispôsobiteľnými veľkosťami náhľadov, dĺžkami popisov a nastaveniami oneskorenia pre optimálny používateľský zážitok.</p><p><strong>Požiadavky:</strong> OpenCart 3.x+, PHP 7.3</p>';
$_['text_setup']                           = '<ul><li><strong>Všeobecné nastavenia:</strong> Konfigurujte oneskorenie vstupu (predvolené: 100 ms) na kontrolu času medzi stlačeniami klávesov a zobrazením výsledkov vyhľadávania.</li><li><strong>Nastavenia produktov:</strong><ul><li>Povoliť/zakázať výsledky vyhľadávania produktov.</li><li>Povoliť/zakázať zobrazenie popisov produktov; nastavte maximálnu dĺžku popisu (predvolené: 100 znakov).</li><li>Povoliť/zakázať náhľady produktov; nastavte šírku a výšku náhľadu (min: 16 px, max: 128 px).</li></ul></li><li><strong>Nastavenia kategórií:</strong><ul><li>Povoliť/zakázať výsledky vyhľadávania kategórií.</li><li>Povoliť/zakázať náhľady kategórií; nastavte rozmery náhľadu (min: 16 px, max: 128 px).</li></ul></li><li><strong>Nastavenia výrobcov:</strong><ul><li>Povoliť/zakázať výsledky vyhľadávania výrobcov.</li><li>Povoliť/zakázať náhľady výrobcov; nastavte rozmery náhľadu (min: 16 px, max: 128 px).</li></ul></li><li><strong>Nastavenia informačných stránok:</strong><ul><li>Povoliť/zakázať výsledky vyhľadávania informačných stránok.</li></ul></li></ul>';
$_['text_troubleshot']                     = '<ul><li><strong>Živé vyhľadávanie nefunguje:</strong> Obnovte cache úprav, overte nastavenie oneskorenia vstupu a uistite sa, že je modul povolený.</li><li><strong>Chýbajú konkrétne výsledky (Produkt, Kategória, Výrobca, Informácie):</strong> Potvrďte, že je relevantná kategória výsledkov povolená v nastaveniach.</li></ul>';
$_['text_faq']                             = '<details><summary>Ako je nastavené predvolené oneskorenie vstupu?</summary> Predvolené oneskorenie vstupu je nastavené na 100 milisekúnd.</details><details><summary>Ako nastavím maximálnu veľkosť miniatury?</summary> Veľkosti miniatur sa dajú nastaviť v rozmedzí od 16 do 128 pixelov pre šírku a výšku.</details><details><summary>Ako obmedzím dĺžku popisu produktu?</summary> Dĺžka popisu sa dá upraviť v nastaveniach; predvolené je 100 znakov.</details><details><summary>Prečo sa niektoré výsledky nezobrazujú v rozbaľovacom zozname?</summary> Uistite sa, že konkrétny typ výsledku (Produkt, Kategória, Výrobca alebo Informácie) je povolený v nastaveniach modulu.</details>';
$_['text_contact']                         = '<p>Pre ďalšiu pomoc sa, prosím, obráťte na náš tím podpory:</p><ul><li><strong>Kontakt:</strong> <a href="mailto:%s">%s</a></li><li><strong>Dokumentácia:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Dokumentácia pre používateľov</a></li></ul>';

// Tab
$_['tab_general']                          = 'Všeobecné';
$_['tab_products']                         = 'Produkty';
$_['tab_categories']                       = 'Kategórie';
$_['tab_manufacturers']                    = 'Výrobcovia';
$_['tab_informations']                     = 'Informácie';
$_['tab_help_and_support']                 = 'Pomoc &amp; Podpora';

// Entry
$_['entry_status']                         = 'Stav';
$_['entry_input_delay']                    = 'Oneskorenie vstupu';
$_['entry_product_status']                 = 'Zobraziť produkty';
$_['entry_category_status']                = 'Zobraziť kategórie';
$_['entry_category_image']                 = 'Zobraziť obrázok kategórie';
$_['entry_category_image_size']            = 'Veľkosť obrázku kategórie (Š x V)';
$_['entry_manufacturer_status']            = 'Zobraziť výrobcov';
$_['entry_manufacturer_image']             = 'Zobraziť obrázok výrobcu';
$_['entry_manufacturer_image_size']        = 'Veľkosť obrázku výrobcu (Š x V)';
$_['entry_information_status']             = 'Zobraziť informácie';
$_['entry_product_description']            = 'Zobraziť popis produktu';
$_['entry_product_description_length']     = 'Dĺžka popisu produktu';
$_['entry_product_image']                  = 'Zobraziť obrázok produktu';
$_['entry_product_image_size']             = 'Veľkosť obrázku produktu (Š x V)';
$_['entry_product_price']                  = 'Zobraziť cenu produktu';
$_['entry_width']                          = 'Šírka';
$_['entry_height']                         = 'Výška';
$_['entry_input_min_chars']                = 'Min. počet znakov';

// Button
$_['button_fix_event_handler']             = 'Opraviť spracovateľ udalostí';

// Help
$_['help_input_delay']                     = 'Toto nastavenie určuje čas oneskorenia (v milisekundách) medzi tým, keď používateľ stlačí kláves a keď sú údaje odoslané na server. Zvyšovanie tohto oneskorenia môže pomôcť znížiť počet požiadaviek odoslaných počas rýchleho zadávania, čím sa zlepší výkon a časy odozvy servera.';
$_['help_product_description_length']      = 'Určte maximálny počet znakov pre popis produktu. Toto nastavenie určuje, koľko znakov sa zobrazí vo výsledkoch vyhľadávania v reálnom čase.';
$_['help_input_min_chars']                 = 'Určte minimálny počet znakov potrebný pred odoslaním vyhľadávacieho dopytu na server.';

// Error
$_['error_permission']                     = 'Upozornenie: Nemáte oprávnenie na modifikáciu modulu Live Search!';
$_['error_form']                           = 'Formulár obsahuje chyby. Prosím opravte zvýraznené polia.';
$_['error_input_delay_min']                = 'Oneskorenie vstupu musí byť aspoň 100 milisekúnd.';
$_['error_product_description_length_min'] = 'Dĺžka popisu produktu nemôže byť menšia ako 0 znakov.';
$_['error_product_description_length_max'] = 'Dĺžka popisu produktu nemôže presiahnuť 200 znakov.';
$_['error_product_image_width_min']        = 'Šírka obrázku produktu musí byť aspoň 16 pixelov.';
$_['error_product_image_width_max']        = 'Šírka obrázku produktu nesmie presiahnuť 128 pixelov.';
$_['error_product_image_height_min']       = 'Výška obrázku produktu musí byť aspoň 16 pixelov.';
$_['error_product_image_height_max']       = 'Výška obrázku produktu nesmie presiahnuť 128 pixelov.';
$_['error_category_image_width_min']       = 'Šírka obrázku kategórie musí byť aspoň 16 pixelov.';
$_['error_category_image_width_max']       = 'Šírka obrázku kategórie nesmie presiahnuť 128 pixelov.';
$_['error_category_image_height_min']      = 'Výška obrázku kategórie musí byť aspoň 16 pixelov.';
$_['error_category_image_height_max']      = 'Výška obrázku kategórie nesmie presiahnuť 128 pixelov.';
$_['error_manufacturer_image_width_min']   = 'Šírka obrázku výrobcu musí byť aspoň 16 pixelov.';
$_['error_manufacturer_image_width_max']   = 'Šírka obrázku výrobcu nesmie presiahnuť 128 pixelov.';
$_['error_manufacturer_image_height_min']  = 'Výška obrázku výrobcu musí byť aspoň 16 pixelov.';
$_['error_manufacturer_image_height_max']  = 'Výška obrázku výrobcu nesmie presiahnuť 128 pixelov.';
$_['error_input_min_chars']                = 'Minimálna dĺžka vstupu nemôže byť nižšia ako 1 znak.';
