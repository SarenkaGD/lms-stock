<?php
$this->DB->BeginTrans();

$this->DB->Execute('INSERT INTO uiconfig(section, var, value, description, type) VALUES(?, ?, ?, ?, ?)', array('phpui', 'invoice_autocomplete', '1', 'Wyświetlaj zbierane podpowiedzi przy wystawianiu faktury', '1'));

$this->DB->Execute('UPDATE stck_dbinfo SET keyvalue = ? WHERE keytype = ?', array('2026072100', 'dbversion'));

$this->DB->CommitTrans();

?>
