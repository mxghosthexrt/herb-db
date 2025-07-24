<?php require('connectdb.php');?>
<?
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $herb_th_name=$_POST['herb_th_name'];
        $herb_en_name=$_POST['herb_en_name'];
        $herb_sc_name=$_POST['herb_sc_name'];
        $herb_other_name=$_POST['herb_other_name'];
        $family_id=$_POST['family_id'];
        $herb_character=$_POST['herb_character'];
        $herb_properties=$_POST['herb_properties'];

        $sqlsave="INSERT INTO tb_herb_data(herb_th_name,herb_en_name,herb_sc_name,herb_other_name,family_id,herb_character,herb_properties) 
        VALUES('$herb_th_name','$herb_en_name','$herb_sc_name','$herb_other_name',$family_id,'$herb_character','$herb_properties')";
        $result = $conn->query($sqlsave);

        if ($conn->query($sqlsave) === TRUE) {
            echo "บันทึกเสร็จเรียบร้อยแล้ว";
        } else {
            echo "Error: " . $sqlsave . "<br>" . $conn->error;
        }

}
?>