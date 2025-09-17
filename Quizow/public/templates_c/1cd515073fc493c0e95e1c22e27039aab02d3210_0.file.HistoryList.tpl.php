<?php
/* Smarty version 4.1.0, created on 2023-11-14 14:59:42
  from 'C:\xampp\htdocs\Projekt\app\views\HistoryList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_65537d4e5e2324_51543219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cd515073fc493c0e95e1c22e27039aab02d3210' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\HistoryList.tpl',
      1 => 1699970380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_65537d4e5e2324_51543219 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76758630065537d4e5d9849_42013111', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72315855065537d4e5dd249_72151935', 'bottom');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_76758630065537d4e5d9849_42013111 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_76758630065537d4e5d9849_42013111',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<center>
<legend style="color:white">Chcesz uzyskać pełny dostęp? Zaloguj się albo zarejestruj.</legend>
<div>
	<p>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userNew" class="idz">Rejestracja</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow" class="idz">Logowanie</a>
    </p>
</div>

<div class="bottom-margin">
<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
historyList">
	<legend style="color:white">Opcje wyszukiwania</legend>
	<fieldset>
		<input type="text" id="myInput" onkeyup="searchTable()" placeholder="Wyszukaj interesujący Cię Quiz" style="width: 500px;">
	</fieldset>
</form>
</div>	
</center>

<?php
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_72315855065537d4e5dd249_72151935 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_72315855065537d4e5dd249_72151935',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<br>
<center>
<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>NAZWA QUIZU</th>
		<th>POZIOM TRUDNOŚCI</th>
		<th>KATEGORIA</th>
		<th>TAGI</th>
		<th>OPCJE</th>
	</tr>
</thead>
<tbody>
<tr><td>Matematyczna Rozgrzewka</td><td>Easy</td><td>Matematyka</td><td>mat</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
quiz1" style="background-color: #171644;">Przejdź do Quizu</a></td></tr><tr><td>Przypomnienie do matury</td><td>Medium</td><td>Matematyka</td><td>mat</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
quiz2" style="background-color: #171644;">Przejdź do Quizu</a></td></tr><tr><td>Matematyka w Kosmosie</td><td>Hard</td><td>Matematyka</td><td>mat</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
quiz3" style="background-color: #171644;">Przejdź do Quizu</a></td></tr><tr><td>Test dla początkującego programisty</td><td>Easy</td><td>Informatyka</td><td>inf</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
quiz4" style="background-color: #171644;">Przejdź do Quizu</a></td></tr><tr><td>Wiedza Programisty</td><td>Medium</td><td>Informatyka</td><td>inf</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
quiz5" style="background-color: #171644;">Przejdź do Quizu</a></td></tr><tr><td>Doświadczony Programista</td><td>Hard</td><td>Informatyka</td><td>inf</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
quiz6" style="background-color: #171644;">Przejdź do Quizu</a></td></tr><tr><td>Młody Geografik</td><td>Easy</td><td>Geografia</td><td>geo</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
quiz7" style="background-color: #171644;">Przejdź do Quizu</a></td></tr><tr><td>Wyzwanie Geograficzne</td><td>Medium</td><td>Geografia</td><td>geo</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
quiz8" style="background-color: #171644;">Przejdź do Quizu</a></td></tr><tr><td>Globus zamiast głowy</td><td>Hard</td><td>Geografia</td><td>geo</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
quiz9" style="background-color: #171644;">Przejdź do Quizu</a></td></tr>
</tbody>
</table><br>

<?php echo '<script'; ?>
>
    function searchTable() {
        // Pobierz wartość wprowadzoną przez użytkownika
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("tab_people");
        tr = table.getElementsByTagName("tr");

        // Przejdź przez wszystkie wiersze tabeli
        for (i = 0; i < tr.length; i++) {
            // Przejdź przez wszystkie komórki w bieżącym wierszu
            td = tr[i].getElementsByTagName("td");
            for (var j = 0; j < td.length; j++) {
                txtValue = td[j].textContent || td[j].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    // Jeśli znaleziono dopasowanie, pokaż wiersz
                    tr[i].style.display = "";
                    break; // przerwij pętlę, gdy znaleziono dopasowanie
                } else {
                    // Jeśli nie znaleziono dopasowania, ukryj wiersz
                    tr[i].style.display = "none";
                }
            }
        }
    }
<?php echo '</script'; ?>
>

</center>
<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'bottom'} */
}
