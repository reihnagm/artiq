<?php

namespace App\Controllers\Home;

use App\Controllers\Base\BaseController;

use Config\Services;
use Config\Database;

class Home extends BaseController {

    protected $db;
    protected $session;

    public function __construct() {
        $this->db = Database::connect();
        $this->session = Services::session();
    }

    public function login() {
        return view('cms/login');
    }

    public function loginPost() {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        if($username == 'admin' && $password == '12345678') {
            $this->session->set([
                "authenticated" => true
            ]);
        }

        return json_encode([
            "message" => "Successfully"
        ]);
    }

    public function logout() {
        $this->session->remove('authenticated');

        return json_encode([
            "message" => "Successfully"
        ]);
    }

    public function register() {
        $val = $this->request->getPost('val');
        $jenisDeposito = $this->request->getPost('jenis_deposito');
        
        $fullname = $this->request->getPost('fullname');
        $phone = $this->request->getPost('phone');
        $email = $this->request->getPost('email');
        $type = $this->request->getPost('type');

        switch($type) {
            case 'pembiayaan':
                $this->db->query("INSERT INTO deposito_pembiayaans (produk_pembiayaan, name, phone, email) VALUES ('$val', '$fullname', '$phone', '$email')");
            break;
            case 'tabungan':
                $this->db->query("INSERT INTO deposito_tabungans (jenis_tabungan, name, phone, email) VALUES('$val', '$fullname', '$phone', '$email')");
            break;
            case 'mutlaqahs': 
                $this->db->query("INSERT INTO deposito_mutlaqahs (name, phone, email) VALUES('$fullname', '$phone', '$email')");
            break;
            case 'deposito': 
                $this->db->query("INSERT INTO deposito_muqayyadah_mudharabahs (jenis_deposito, proyek, name, phone, email) VALUES('$jenisDeposito', '$val', '$fullname', '$phone', '$email')");
            break;
        }

        return json_encode([
            "message" => "Successfully"
        ]);
    }

    public function depositoMutlaqah() {
        $result = $this->db->query("SELECT * FROM deposito_muqayyadah_mudharabahs WHERE jenis_deposito = 'Deposito Mutlaqah'");
        $data = $result->getResult();

        return view('cms/deposito-mutlaqah', [
            "mutlaqahs" => $data
        ]);
    }

    public function depositoTabungan() {
        $result = $this->db->query("SELECT * FROM deposito_tabungans");
        $data = $result->getResult();
        
        return view('cms/deposito-tabungan', [
            "tabungans" => $data
        ]);
    }

    public function depositoPembiayaan() {
        $result = $this->db->query("SELECT * FROM deposito_pembiayaans");
        $data = $result->getResult();

        return view('cms/deposito-pembiayaan', [
            "pembiayaans" => $data
        ]);
    }

    public function depositoMuqayyadahMudharabah() {
        $result = $this->db->query("SELECT * FROM deposito_muqayyadah_mudharabahs WHERE jenis_deposito = 'Deposito Mumu'");
        $data = $result->getResult();

        return view('cms/deposito-muqayyadah-mudharabah', [
            "muqayyadahs" => $data
        ]);
    }

    public function registerDeposito() {
        $data['meta_title'] = 'Bank Albarokah | Daftar Deposito';
        $data['title'] = 'Daftar Deposito';
        $data['desc'] = 'Lengkapi Form Berikut Dengan Mengisi Data Yang Benar Kami Segera Menghubungi Anda';
        $data['type'] = 'deposito';
        $data['hero_title'] = 'Apa itu Deposito ?';
        $data['hero_desc'] = 'Pelajari lebih lanjut tentang produk deposito Mudharabah
        dan deposito MUMU';

        return view('daftar/index', $data);
    }

    public function registerTabungan() {
        $data['meta_title'] = 'Bank Albarokah | Daftar Tabungan';
        $data['title'] = 'Daftar Tabungan';
        $data['desc'] = 'Lengkapi Form Berikut Dengan Mengisi Data Yang Benar Kami Segera Menghubungi Anda';
        $data['type'] = 'tabungan';
        $data['hero_title'] = 'Apa itu Tabungan Bank Albarokah ?';
        $data['hero_desc'] = 'Pelajari lebih lanjut tentang produk Tabungan Bank
        Albarokah';

        return view('daftar/index', $data);
    }

    public function registerPembiayaan() {
        $data['meta_title'] = 'Bank Albarokah | Daftar Pembiayaan';
        $data['title'] = 'Daftar Pembiayaan';
        $data['desc'] = 'Lengkapi Form Berikut Dengan Mengisi Data Yang Benar Kami Segera Menghubungi Anda';
        $data['type'] = 'pembiayaan';
        $data['hero_title'] = 'Apa itu Pembiayaan Bank Albarokah ?';
        $data['hero_desc'] = 'Pelajari lebih lanjut tentang produk Pembiayaan Bank
        Albarokah';

        return view('daftar/index', $data);
    }

    public function home() {
        $data['title'] = 'ARTIQ | Homepage';

        return view('index', $data);
    }

    public function aboutus() {
        $data['title'] = 'ARTIQ | About Us';

        return view('about', $data);
    }

    public function ourservices() {
        $data['title'] = 'ARTIQ | Our Services';

        return view('service', $data);
    }

    public function serviceDetail() {
        $data['title'] = 'ARTIQ | Detail Service';

        return view('service-single', $data);
    }

    public function contact() {
        $data['title'] = 'ARTIQ | Contact';

        return view('contact', $data);
    }

    public function portfolio() {
        $data['title'] = 'ARTIQ | Portfolio';

        return view('project', $data);
    }

    public function portfolioDetail() {
        $data['title'] = 'ARTIQ | Portfolio Detail';

        return view('project-single', $data);
    }

}
