<?php
$this->DB->BeginTrans();

$this->DB->Execute('INSERT INTO uiconfig(section, var, value, description, type) VALUES(?, ?, ?, ?, ?)', array('invoices', 'show_balanace_summary_pro', 'false', 'Wyświetlaj podsumownaie konta klienta i salda na fakturze PRO FORMA', '7'));

$this->DB->Execute('UPDATE stck_dbinfo SET keyvalue = ? WHERE keytype = ?', array('2026060200', 'dbversion'));

$this->DB->CommitTrans();

?>
