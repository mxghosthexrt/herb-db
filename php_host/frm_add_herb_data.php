<?php require('connectdb.php');?>
<?php
        $sqlfamily="SELECT * FROM tb_family ORDER BY family_id";
        $result = $conn->query($sqlfamily);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข้อมูลสมุนไพร</title>
</head>
<body>
    <form action="save_herb_data.php" method="post" name="frm_savedata.php" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>ชื่อสมุนไพร (ภาษาไทย)</td>
                    <td><input type="text" name="herb_th_name" id="herb_th_name" placeholder="กรุณาป้อนชื่อสมุนไพร (ภาษาไทย)"></td>
                </tr>
                <tr>
                    <td>ชื่อสมุนไพร (ภาษาอังกฤษ)</td>
                    <td><input type="text" name="herb_en_name" id="herb_en_name" placeholder="กรุณาป้อนชื่อสมุนไพร (ภาษาอังกฤษ)"></td>
                </tr>
                <tr>
                    <td>ชื่อสมุนไพร (วิทยาศาสตร์)</td>
                    <td><input type="text" name="herb_sc_name" id="herb_sc_name" placeholder="กรุณาป้อนชื่อสมุนไพร (วิทยาศาสตร์)"></td>
                </tr>
                <tr>
                    <td>ชื่อสมุนไพร (ท้องถิ่น)</td>
                    <td><input type="text" name="herb_other_name" id="herb_other_name" placeholder="กรุณาป้อนชื่อสมุนไพร (ท้องถิ่น)"></td>
                </tr>         
                <tr>
                    <td>ชื่อวงศ์</td>
                    <td>
                        <select name="family_id" id="family_id">
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <option value="<?php echo $row['family_id'];?>"><?php echo $row['family_name'];?></option>
                        <?php } ?>
                        </select>
                    </td>
                </tr>          
                <tr>
                    <td>ลักษณะทางพฤกษศาสตร์</td>
                    <td>
                        <textarea row="5" name="herb_character"></textarea>
                    </td>
                </tr> 
                <tr>
                    <td>สรรพคุณ</td>
                    <td>
                        <textarea row="5" name="herb_properties"></textarea>
                    </td>
                </tr> 
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="save" id="save" value="บันทึก">
                        <input type="reset" name="reset" id="reset" value="ยกเลิก">
                    </td>
                </tr> 
            </table>
    </form>
</body>
</html>