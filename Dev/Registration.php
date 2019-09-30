<?php 
    class Registration {

        public function checkEmail($email)
        {
            $db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM registration WHERE email=:email");
			$query->bindValue(":email", $email);
			$query->execute();
			if($query->rowCount() > 0){
				return true;
			}else{
				return false;
			}
        }

        public function addRegistration($reg_number, $passport, $firstname, $lastname, $email, $employer,
        $home_phone, $position, $mobile, $business, $home_address, $business_address, $birth, $details, $contribute)
        {
            $db = Database::getInstance()->getConnection();
            $query = $db->prepare("INSERT INTO registration (reg_number, passport, firstname, lastname, email, employer,
             home_phone, position, mobile, business, home_address, business_address, birth, details, contribute)
             VALUES (:reg_number, :passport, :firstname, :lastname, :email, :employer,:home_phone, :position, :mobile, :business, 
            :home_address, :business_address, :birth, :details, :contribute)");
            $query->bindValue(":reg_number", $reg_number);
            $query->bindValue(":passport", $passport);
            $query->bindValue(":firstname", $firstname);
            $query->bindValue(":lastname", $lastname);

            $query->bindValue(":email", $email);
            $query->bindValue(":employer", $employer);
            $query->bindValue(":home_phone", $home_address);
            $query->bindValue(":position", $position);

            $query->bindValue(":mobile", $mobile);
            $query->bindValue(":business", $business);
            $query->bindValue(":home_address", $home_address);
            $query->bindValue(":business_address", $business_address);

            $query->bindValue(":birth", $birth);
            $query->bindValue(":details", $details);
            $query->bindValue(":contribute", $contribute);
            
            if(!empty($query->execute())){
                return true;
            }else{
                return false;
            }
        }

        public function updateRegistration($reg_number, $passport, $firstname, $lastname, $email, $employer,
        $home_phone, $position, $mobile, $business, $home_address, $business_address, $birth, $details, $contribute)
        {
            $db = Database::getInstance()->getConnection();
            $query = $db->prepare("UPDATE registration SET reg_number=:reg_number, passport=:passport, firstname=:firstname, 
            lastname=:lastname, email=:email, employer=:employee, home_phone=:home_phone, position=:position, mobile=:mobile, 
            business=:business, home_address=:home_address, business_address=:business_address, birth=:birth, details=:details, 
            contribute=:contribute WHERE reg_number=:reg_number");
            $query->bindValue(":reg_number", $reg_number);
            $query->bindValue(":passport", $passport);
            $query->bindValue(":firstname", $firstname);
            $query->bindValue(":lastname", $lastname);

            $query->bindValue(":email", $email);
            $query->bindValue(":employer", $employer);
            $query->bindValue(":home_phone", $home_address);
            $query->bindValue(":position", $position);

            $query->bindValue(":mobile", $mobile);
            $query->bindValue(":business", $business);
            $query->bindValue(":home_address", $home_address);
            $query->bindValue(":business_address", $business_address);

            $query->bindValue(":birth", $birth);
            $query->bindValue(":details", $details);
            $query->bindValue(":contribute", $contribute);
            
            if(!empty($query->execute())){
                return true;
            }else{
                return false;
            }
        }

        public function getAllUser()
		{
			$db = Database::getInstance()->getConnection();
			$query = $db->prepare("SELECT * FROM registration ORDER BY registration_id ASC");
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getSingleUser($reg_number)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM registration WHERE reg_number=:reg_number");
            $query->bindValue(":reg_number", $reg_number);
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getSingleUserDetails($reg_number)
		{
			$db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM registration WHERE reg_number=:reg_number");
            $query->bindValue(":reg_number", $reg_number);
			$query->execute();
			return $query->fetch();
        }
    }
?>