<?php
class Register extends Model {

    const table_name = 'users';

    public function tableName()
    {
        return self::table_name;
    }

    public function attributes()
    {
        return ['id','display_name','email','password','access'];
    }
    /// sign up
    public function signUp($data){

        $name=$data['name'];
        $email=$data['email'];
        $password=$data['password'];
        $repeat=$data['repeat'];



        if (empty($name) or empty($email)or empty($password)){
            Session::CreateMassage('لطفا همه ی کادر ها را پر کنید !');
            Url::redirect("Register/register.php");
        }
        if ($password != $repeat) {
            Session::CreateMassage('رمز و تکرار آن باهم برابر نم باشد !');
            Url::redirect("Register/register.php");
        }
        //$sql = Database::insertUser("$username","$email","$password");
        $data = ($data);
        $data['password']=md5(strtolower($password));
        $log = new Register();
        $log->load($data);
        $log->save();

        $sql=$log->getLastInsertId();
        if ($sql){
            Session::CreateMassage('ثبت نام با موفقیت انجام شد :)');
            Url::redirect("../frontend/index.php");
        }else {
            Session::CreateMassage('we have some error !!!');
            Url::redirect("../frontend/login.php");
        }
    }
    /// sign In
    function signIn($email,$password)
    {
        if ($email == "" or $password == "") {
            session::CreateMassage('لطفا همه کادر ها را پر کنید !');
            Url::redirect("Register/login.php");
        }
        $password = md5(strtolower($password));

        $res=$this->select()->from($this->tableName())->where("email='$email' and password='$password'")->one();
        if (!$res)
        {
            session::CreateMassage('خطا : لطفا نام کاربری و رمز خود را درست وارد کنید !');
            Url::redirect("Register/login.php");
        }
        $result=$res->asArray();
        if ($result) {
            $_SESSION['email'] = $email;
            session::CreateMassage('خوش آمدید . . .');
            Url::redirect("index.php");
        } else {
            session::CreateMassage('خطا : لطفا نام کاربری و رمز خود را درست وارد کنید !');
            Url::redirect("Register/login.php");
        }
    }

}