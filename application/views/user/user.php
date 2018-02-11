<h1>รายชื่อผู้เข้าร่วมอบรม</h1>
        <div class="alert alert-danger" role="alert">
            This is a danger alert—check it out!
        </div>
        <a href="/user/adduser" class="btn btn-success">เพิ่ม</a>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ชื่อผู้ใช้งาน</th>
                    <th>ชื่อ - สกุล</th>
                    <th>อีเมล์</th>
                    <th>อายุ</th>
                    <th>จัดการ</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($users->result() as $user) {
    ?>
                <tr>
                    <td><?php echo $user->user_id ?></td>
                    <td><?php echo $user->username ?></td>
                    <td><?php echo $user->fullname ?></td>
                    <td><?php echo $user->email ?></td>
                    <td><?php echo $user->age ?></td>
                    <td>
                        <a href="/user/show/<?php echo $user->user_id ?>" class ="btn btn-info"><i class="fas fa-search"></i> แสดง</a>    
                        <a href="/user/edit/<?php echo $user->user_id ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i> แก้ไข</a>
                        <a onclick="javascript: return confirm('แน่ใจเหรอครับ ?')" href="/user/Delete/<?php echo $user->user_id ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i> ลบ</a>
                    </td>
                </tr>
                
                <?php
} ?>
            </tbody>
        </table>
    