Client Requirement ([origin file](./files/High_level_requirements.xlsx)):
============================
#### Client System Requirement:
- Php, MySQL
  - Php, mssql để đồng bộ với cơ sở dữ liệu cũ

## Modify client Requirement:

1. ##### Quản lý hồ sơ cá nhân  
  - Quản lý Hồ sơ Nhân Sự & Hỗ trợ Quản lý hồ sơ giấy
  - Lịch sử làm việc
  - Upload hình ảnh profile
  - Kết nối vào smartphone quét barcode đọc thông tin  
2. ##### Quản lý hợp đồng
  - BHXH
  - Thử việc
  - Tuyển dụng
3. ##### Quản lý lương
  - Quản lý chấm công ca & Sản lượng & Điểm danh hiện diện
  - Nghỉ phép
  - Nhập & Import giờ công, sản lượng
  - Phân chia theo tổ máy/chuyền
  - Quản lý tính lương : lương cố định, lương linh hoạt, lương sản lượng
  - Kết nối vào máy chấm công & ký nhận
  - Phiếu lương online & Ghi nhận nhận lương
4. ##### Quản lý Phòng Ban
  - Sơ đồ tổ chức
  - Quản lý danh sách (Bao gồm các Tổ, nhóm tham gia)
  - Lập bảng mô tả công việc
  - Mapping các điểm trong bảng mô tả công việc thành KPI để đánh giá
  - Đánh trọng số từng KPI
5. ##### Quản lý khen thưởng kỷ luật
  - KPI & đánh giá
  - Upload hình ảnh vi phạm
6. ##### Quản lý  Đào tạo
  - Đánh giá tay nghề
  - Chấm điểm chéo
  - Trắc nghiệm nội quy lao động & Khảo sát nhân viên
  - Quản lý khóa đào tạo và kết quả đào tạo
7. ##### Quản lý thông báo
  - Gửi mail thông báo và notification về các thông báo cho nhân viên
  - Duyệt các đóng góp của nhân viên và chuyển về hòm thư của giám đốc
8. ##### Báo cáo ( gợi ý: dùng các thư viện biểu đồ)
  - Báo cáo lao động theo tổ theo ngày
  - Thiết lập giới hạn (Threadhold) cảnh báo
  - Theo dõi chi phí Nhân Sự
## Suggest solution
- Use Adminlte template for CMS
- Use Adminlte library for chart of report
- Use php 7.2 and laravel framework
- cover file to CSV extension for import to System
- Laravel filmanager package to import image and manager
- Change manage Paper Document to barcode/ Specific number for increase time to get these document on document location
