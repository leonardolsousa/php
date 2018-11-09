<form action="processa_form6.php" method="POST">

    <label>Nome Completo</label><br>
    <input type="text" name="nome" /><br><br>
    
    <label>Turma</label><br>
    <input type="radio" name="turma" value="M">Manhã
    <input type="radio" name="turma" value="T">Tarde
    <input type="radio" name="turma" value="N">Noite <br><br>

    <label>Matérias (Segure o botão Ctrl para selecionar mais de uma opção)</label><br>
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
        <option value="Python">Python</option>
    </select><br><br>

    <label>Conte-nos por que devemos escolher você</label><br>
    <textarea name="pedido" rows="5" cols="50"></textarea><br><br>

    <label>E-mail</label><br>
    <input type="text" name="email" /><br>
    <label>Senha</label><br>
    <input type="password" name="senha" /><br><br>
    

    <input type="submit" value="Enviar dados" /><br>
</form>