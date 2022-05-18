<?php
//----------------------------Aluno-----------------------------
Class aluno{

    private $pdo;
    public function __construct($dbname, $host, $user, $senha)
    {
        try
        {
            $this->pdo = new PDO("mysql:dbname=" . $dbname . ";host=" . $host,$user,$senha);
        } 
        catch (PDOException $e) {
            echo "Erro com banco de dados: " . $e->getMessage(); 
        }
        catch (Exception $e) {
            echo "Erro generico: " . $e->getMessage();
        }
    }

    public function buscarDados()
    {
       $res = array();
       $cmd = $this->pdo->query("SELECT * FROM aluno ORDER BY nome"); 
       $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
       return $res;
    }

    public function cadastrarAluno($img, $cpf, $nome, $email, $telefone, $data_nas, $endereco, $bairro, $nivel_escol, $estuda_em_outra, $qual_instituicao, $qual_curso ,$motivo_insituicao, $motivo_curso, $exp_profissao, $exp_curso)
    {
        $cmd = $this->pdo->prepare("SELECT id from aluno WHERE cpf = :c");
        $cmd->bindValue(":c",$cpf);
        $cmd->execute();
        if($cmd->rowCount() > 0)
        {
           return false; 
        } else {
            $cmd = $this->pdo->prepare("INSERT INTO pessoa (img, cpf, nome, email, telefone, data_nas, endereco, bairro, nivel_escol, estuda_em_outra, qual_instituicao, qual_curso, motivo_insituicao, motivo_curso, exp_profissao, exp_curso) VALUES (:img, :c, :n, :e, :t, :dn, :ende, :bai, :ne, :eeo, :qi, :qc, :mi, :mc, :ep, :ec)");
            $cmd->bindValue(":img",$img);
            $cmd->bindValue(":c",$cpf);
            $cmd->bindValue(":n",$nome);
            $cmd->bindValue(":e",$email);
            $cmd->bindValue(":t",$telefone);
            $cmd->bindValue(":dn",$data_nas);
            $cmd->bindValue(":ende",$endereco);
            $cmd->bindValue(":bai",$bairro);
            $cmd->bindValue(":ne",$nivel_escol);
            $cmd->bindValue(":eeo",$estuda_em_outra);
            $cmd->bindValue(":qi",$qual_instituicao);
            $cmd->bindValue(":qc",$qual_curso);
            $cmd->bindValue(":mi",$motivo_insituicao);
            $cmd->bindValue(":mc",$motivo_curso);
            $cmd->bindValue(":ep",$exp_profissao);
            $cmd->bindValue(":ec",$exp_curso);
            $cmd->execute();
            return true;
        }
    }


    public function atualizarDadosAluno($id, $img, $cpf, $nome, $email, $telefone, $data_nas, $endereco, $bairro, $nivel_escol, $estuda_em_outra, $qual_instituicao, $qual_curso ,$motivo_insituicao, $motivo_curso, $exp_profissao, $exp_curso)
    {
            $cmd = $this->pdo->prepare("UPDATE aluno SET img = :img, nome = :n, email = :e, telefone = :t, data_nas = :dn, endereco = :ende, bairro = :bai, nivel_escol = :ne, estuda_em_outra = :eeo, qual_instituicao = :qi, qual_curso = :qc, motivo_instituicao = :mi, motivo_curso = :mc, exp_profissao = :ep, exp_curso = :ec, WHERE id = :id");
            $cmd->bindValue(":img",$img);
            $cmd->bindValue(":c",$cpf);
            $cmd->bindValue(":n",$nome);
            $cmd->bindValue(":e",$email);
            $cmd->bindValue(":t",$telefone);
            $cmd->bindValue(":dn",$data_nas);
            $cmd->bindValue(":ende",$endereco);
            $cmd->bindValue(":bai",$bairro);
            $cmd->bindValue(":ne",$nivel_escol);
            $cmd->bindValue(":eeo",$estuda_em_outra);
            $cmd->bindValue(":qi",$qual_instituicao);
            $cmd->bindValue(":qc",$qual_curso);
            $cmd->bindValue(":mi",$motivo_insituicao);
            $cmd->bindValue(":mc",$motivo_curso);
            $cmd->bindValue(":ep",$exp_profissao);
            $cmd->bindValue(":ec",$exp_curso);
            $cmd->bindValue(":id",$id);
            $cmd->execute();
            return true;
    }
}


//----------------------------Usuário---------------------------------
Class usuario{

    private $pdo;
    public function __construct($dbname, $host, $user, $senha)
    {
        try
        {
            $this->pdo = new PDO("mysql:dbname=" . $dbname . ";host=" . $host,$user,$senha);
        } 
        catch (PDOException $e) {
            echo "Erro com banco de dados: " . $e->getMessage(); 
        }
        catch (Exception $e) {
            echo "Erro generico: " . $e->getMessage();
        }
    }

    public function buscarDados()
    {
       $res = array();
       $cmd = $this->pdo->query("SELECT * FROM usuario ORDER BY nome"); 
       $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
       return $res;
    }

    public function cadastrarUsuario($img, $matricula, $nome, $email, $senha, $nivel)
    {
        $cmd = $this->pdo->prepare("SELECT id from usuario WHERE matricula = :m");
        $cmd->bindValue(":m",$matricula);
        $cmd->execute();
        if($cmd->rowCount() > 0)
        {
           return false; 
        } else {
            $cmd = $this->pdo->prepare("INSERT INTO usuario (img, matricula, nome, email, senha, nivel) VALUES (:img, :m, :n, :e, :s, :n)");
            $cmd->bindValue(":img",$img);
            $cmd->bindValue(":m",$matricula);
            $cmd->bindValue(":n",$nome);
            $cmd->bindValue(":e",$email);
            $cmd->bindValue(":s",$senha);
            $cmd->bindValue(":n",$nivel);
            $cmd->execute();
            return true;
        }
    }

    public function excluirUsuario($id)
    {
        $cmd = $this->pdo->prepare("DELETE FROM usuario WHERE id = :id");
        $cmd->bindValue(":id",$id);
        $cmd->execute();
    }

    public function buscarDadosUsuario($id) 
    {
       $res = array(); 
       $cmd = $this->pdo->prepare("SELECT * FROM usuario WHERE id = :id");
       $cmd->bindValue(":id",$id);
       $cmd->execute();
       $res = $cmd->fetch(PDO::FETCH_ASSOC);
       return $res; 

    }

    public function atualizarDadosUsuario($id, $img, $matricula, $nome, $email, $senha, $nivel)
    {
            $cmd = $this->pdo->prepare("UPDATE usuario SET img = :img, matricula = :m, nome = :n, email = :e, senha = :s, nivel = :n; WHERE id = :id");
            $cmd->bindValue(":img",$img);
            $cmd->bindValue(":m",$matricula);
            $cmd->bindValue(":n",$nome);
            $cmd->bindValue(":e",$email);
            $cmd->bindValue(":s",$senha);
            $cmd->bindValue(":n",$nivel);
            $cmd->bindValue(":id",$id);
            $cmd->execute();
            return true;
    }
}

?>