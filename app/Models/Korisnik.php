<?php
namespace App\Models;
use App\Config\DB;

class Korisnik {
    private $db;

    public function __construct(DB $db){
        $this->db = $db;
    }

    public function getUser($email, $password){
        return $this->db->executeOneRow("SELECT id, ime, prezime, korisnicko_ime, uloga_id FROM korisnik WHERE email = ? AND lozinka=MD5(?)", [$email, $password]);
    }
}