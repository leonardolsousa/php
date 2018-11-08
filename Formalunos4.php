<form action="processa_form4.php" method="POST">

    <label>Nome Completo</label><br>
    <input type="text" name="nome" /><br><br>
    
    <label>Turma</label><br>
    <input type="radio" name="turma" value="M">Manhã
    <input type="radio" name="turma" value="T">Tarde
    <input type="radio" name="turma" value="N">Noite <br><br>

    <label>Matérias</label><br>
    <select name="materias[]" size="3" multiple>
        <option value="Magento">Magento</option>
        <option value="PHP">PHP</option>
        <option value="JS">Javascript</option>
        <option value="Java">Java</option>
        <option value="C">C</option>
        <option value="Ruby">Ruby</option>
        <option value="Haskell">Haskell</option>
        <option value="C++">C++</option>
        <option value="Cobol">Cobol</option>
        <option value="Python">PHP</option>
    </select><br>

    <input type="submit" value="Enviar dados" /><br>
</form>