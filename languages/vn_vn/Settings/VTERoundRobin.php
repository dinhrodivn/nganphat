<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/
$languageStrings = array(
    'LBL_STATUS_TOOLTIPS'=>'Trường sẽ được sử dụng để lấy tất cả các bản ghi chưa được gán.',
    'LBL_UNASSIGNED_TOOLTIPS'=>'Giá trị sẽ được sử dụng để xác định tất cả các bản ghi chưa được gán.',
    'LBL_ASSIGNED_TOOLTIPS'=>'Ngay khi bản ghi được gán cho người dùng, trạng thái bản ghi sẽ được cập nhật thành giá trị này.',
    'LBL_ONLINE_USERS_ONLY_TOOLTIPS'=>"Khi ON, chính sách sẽ chỉ áp dụng cho Người dùng TRỰC TUYẾN. Mỗi người dùng có thể thay đổi trạng thái của họ - nút (cho mỗi người dùng) chỉ hiển thị nếu có ít nhất một chính sách với \"Chỉ người dùng trực tuyến\" = ON. Nếu không có chính sách nào yêu cầu người dùng trực tuyến - nút sẽ không hiển thị. Nút được hiển thị trong tiêu đề (hiển thị rõ ràng cho người dùng).",
    'LBL_ASSIGMENT_TYPE_TOOLTIPS'=>'Tiêu chuẩn (1-2-3-1-2-3..): Mỗi Người Dùng sẽ nhận được số lượng bản ghi bằng nhau.',
    'LBL_ASSIGN_PREFER_USER_TOOLTIPS'=>'Điều này chỉ có sẵn trên Thẻ tư vấn. Thẻ tư vấn có thể được chỉ định cho Người Dùng ưa thích của Khách hàng. Ví dụ, nếu một trong các thành viên chính sách (người dùng) là "John Smith" và Thẻ tư vấn được chỉ định cho Khách hàng được gán là "John Smith", thì Thẻ tư vấn sẽ LUÔN được gán cho "John Smith". ',
    'LBL_MEMBERS_TOOLTIPS'=>'Người Dùng sẽ được sử dụng để gán cho bản ghi.',
    'LBL_STATUS_FIELD'=>'Trường trạng thái',
    'LBL_UNASSIGNED_STATUS'=> 'Giá trị trường khi chưa được gán',
    'LBL_ASSIGNED_STATUS'=> 'Giá trị trường khi đã được gán',
    'LBL_ONLINE_USERS_ONLY'=> 'Chỉ Người Dùng trực tuyến',
    'LBL_ASSIGMENT_TYPE'=> 'Kiểu gán',
    'LBL_MEMBERS'=> 'Các thành viên',
    'standard'=> 'Tiêu chuẩn (1-2-3-1-2-3..)',
    'based_on_efficiency'=> 'Dựa trên hiệu quả',
	'MODULE_LBL'=>'Round Robin Assignment',
    'Round Robin Assigment' => 'Round Robin Assignment',
    'Round Robin Assignment' => 'Round Robin Assignment',
    'Round Robin Assigment Details' => 'Round Robin Assignment Details',
    'Round Robin Assignment Details' => 'Round Robin Assignment Details',
    'LBL_NAME' =>'Tên',
    'LBL_MODULE'=>'Module',
    'LBL_STATUS_Round RobinLOG'=>'Display Round RobinLog',
    'LBL_STATUS'=>'Trạng thái',
    'Round Robin Target'=>'Round Robin Target',
    'LBL_Round Robin_TARGET'=> 'Round Robin Target',
    'LBL_RESOLVED_WITHIN'=>'Resolved Within',
    'Round Robin Actions (Alert/Escalations)'=>'Round Robin Actions (Alert/Escalations)',
    'LBL_NAME_Round Robin_ACTION'=>'Name',
    'LBL_TRIGGER_Round Robin_ACTION'=>'Trigger (If not Resolved ____)',
    'LBL_EMAIL_WORKFLOW'=>'Email/Workflow',
    'LBL_ACTIVE'=>'Hoạt động',
    'LBL_INACTIVE'=>'Không hoạt động',
    'LBL_MINS'=>'Phút',
    'LBL_HOURS'=>'Giờ',
    'LBL_EMAIL'=>'Email',
    'LBL_REASSIGN'=>'Reassign',
    'LBL_WORKFLOW'=>'Workflow',
    'LBL_AFTER'=>'Sau',
    'LBL_BEFORE'=>'Trước',
    'LBL_ASSIGNED_USER'=>'Assigned User',
    'LBL_ADD_ROW'=>'Thêm hàng',
	'Online Users'=>'Người Dùng trực tuyến',
	'Role'=>'Vai trò',
	'Assign Preferred User' => 'Gán cho Người Dùng ưa thích',
	'Info' => 'Thông tin',
	'Here\'s how it works: Let\'s assume that you need tickets automatically assigned to your support users. First, select Tickets as your module. Next, status field has to be selected. It is used to identify any unassigned tickets. In our example, say we selected Status as "Ticket Status", Unassigned Status Value as "Open" and Assigned Status value as "In-Progress". This means, that if there\'s a ticket with status "Open" - it will get picked up by the round robin and assigned to one of the members on the policy. In addition, that ticket status will be updated to "In-Progress". Essentially, round robin finds all tickets with status "Open" (unassigned status) and assigns them to members + updates ticket status to "In-Progress" (assigned status). </br></br>

In addition, a field "Round Robin Policy" to tickets. This field is not editable and only visible on detail view. It will identify what policy was used to assign the record. </br></br>

*NOTE: Records are assigned when the cronjob runs. You have to make sure cronjob is setup and enabled.' => 'Đây là cách nó hoạt động: Hãy giả sử rằng bạn cần Thẻ tư vấn tự động được gán cho Người Dùng hỗ trợ của bạn. Đầu tiên, chọn Thẻ tư vấn làm module của bạn. Tiếp theo, trường trạng thái phải được chọn. Nó được sử dụng để xác định bất kỳ Thẻ tư vấn nào chưa được gán.Trong ví dụ của chúng tôi, giả sử chúng tôi đã chọn Trường trạng thái là "Trạng thái", Giá trị trạng thái khi chưa được gán là "Mở" và giá trị Trạng thái khi đã được gán là "Đang tiến hành". Điều này có nghĩa là, nếu có một Thẻ tư vấn có trạng thái "Mở" - nó sẽ được chọn bởi round robin và được gán cho một trong các thành viên trong chính sách. Ngoài ra, trạng thái Thẻ tư vấn đó sẽ được cập nhật thành "Đang tiến hành". Về cơ bản, round robin tìm thấy tất cả các Thẻ tư vấn có trạng thái "Mở" (trạng thái chưa được gán) và gán chúng cho các thành viên + cập nhật trạng thái vé thành "Đang tiến hành" (trạng thái đã được chỉ định). </br></br>

Ngoài ra, một trường "Round Robin Policy" cho Thẻ tư vấn. Trường này không thể chỉnh sửa và chỉ hiển thị trên chế độ xem chi tiết. Nó sẽ xác định chính sách nào đã được sử dụng để gán cho bản ghi. </br></br>
* LƯU Ý: Bản ghi được chỉ định khi cronjob chạy. Bạn phải chắc chắn rằng cronjob đã được thiết lập và kích hoạt.'
);

$jsLanguageStrings = array(

);