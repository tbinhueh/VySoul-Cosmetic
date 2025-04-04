
## Tên đề tài: Xây dựng trang web bán hàng - VySoul Cosmetic

### Mô tả và mục tiêu dự án

#### Mô tả:
**Website VySoul Cosmetic** được xây dựng bằng PHP và sử dụng mô hình MVC, hỗ trợ quản lý cửa hàng bán mỹ phẩm với các chức năng:
- Thêm, xóa, sửa sản phẩm.
- Chức năng tìm kiếm và thống kê.
- Giỏ hàng cho phép khách hàng lựa chọn sản phẩm và thanh toán.
- Phân quyền giữa Admin và User.
  - **Admin**: Quản trị toàn bộ hệ thống và quản lý các sản phẩm, đơn hàng.
  - **User**: Xem sản phẩm, các trang thông tin và thực hiện mua hàng.

#### MỤC TIÊU:
Xây dựng website bán hàng đáp ứng nhu cầu quản lý và mua sắm trực tuyến, giúp khách hàng dễ dàng tìm kiếm và lựa chọn sản phẩm, tiết kiệm thời gian và chi phí.

### TÁC GIẢ:

- Võ Minh Phúc - Tác giả chính: [GitHub](https://github.com/phuclemon)
- Hoàng Thanh Bình - Đồng tác giả: [GitHub](https://github.com/tbinhueh)
- Trần Đăng Khôi - Đồng tác giả: [GitHub](https://github.com/Trandangkhoihp193)


### KIẾN THỨC ÁP DỤNG

- **Kiến trúc MVC**: Tổ chức code theo mô hình Model-View-Controller (MVC) để dễ dàng quản lý và mở rộng các thành phần của ứng dụng. Phân tách rõ ràng giữa phần hiển thị (Views), logic nghiệp vụ (Controllers), và dữ liệu (Models).
- **PHP và MySQL**: Sử dụng PHP để phát triển back-end và kết nối cơ sở dữ liệu MySQL, quản lý dữ liệu sản phẩm, người dùng và đơn hàng. Viết các truy vấn SQL để xử lý dữ liệu và thực hiện các thao tác CRUD (Create, Read, Update, Delete).
- **Xử lý dữ liệu người dùng**: Thực hiện phân quyền giữa Admin và User, trong đó Admin có thể quản lý sản phẩm, đơn hàng và người dùng, còn User chỉ có thể xem sản phẩm và thực hiện mua hàng.
- **Front-end với HTML, CSS và JavaScript**: Tạo giao diện người dùng với HTML và CSS. Sử dụng JavaScript để cải thiện trải nghiệm người dùng, xử lý tương tác trên trang như thêm sản phẩm vào giỏ hàng hoặc tìm kiếm sản phẩm.
- **Quản lý giỏ hàng**: Tạo chức năng giỏ hàng cho phép khách hàng thêm, sửa, xóa các sản phẩm trước khi thanh toán.
- **Quản lý đơn hàng**: Xây dựng chức năng quản lý đơn hàng, theo dõi trạng thái và chi tiết đơn hàng cho từng khách hàng.
- **Tìm kiếm và thống kê**: Tạo chức năng tìm kiếm sản phẩm và thống kê các thông tin quan trọng, hỗ trợ quản lý hàng hóa.
- **Thiết kế trang Web**: Xây dựng bảng màu sắc, icon, lựa chọn các hiệu ứng sao cho đồng bộ.

### TRIỂN KHAI

#### Nền tảng xây dựng:

- **Front-end**: HTML, CSS, JavaScript
- **Back-end**: PHP (theo mô hình MVC) với Models, Views, Controllers
- **Cơ sở dữ liệu**: MySQL (được cấu hình trên Hostinger để lưu trữ thông tin người dùng, sản phẩm, giỏ hàng, đơn hàng và các thông tin khác.)
- **Thư viện bổ sung**: Bootstrap (cho giao diện), jQuery (cho các thành phần động)
- **Hosting**: Website đã được triển khai trên Hostinger với domain [vysoul.com](https://vysoul.com)


### 5 CHỨC NĂNG CHÍNH VÀ CẤU TRỨC MVC

## 1. Quản lý sản phẩm
- **Model**: `ProductModel.php`
  - Xử lý các thao tác CRUD với sản phẩm
  - Tương tác với bảng `products` trong database
  
- **Controller**: `ProductController.php`
  - Xử lý các request liên quan đến sản phẩm
  - Validate dữ liệu đầu vào
  - Gọi các phương thức từ Model
  
- **View**: `Views/admin/products/`
  - Hiển thị danh sách sản phẩm
  - Form thêm/sửa sản phẩm
  - Chi tiết sản phẩm

## 2. Thông tin sản phẩm
- **Model**: `ProductModel.php`
  - Lấy thông tin chi tiết sản phẩm
  - Lấy danh sách sản phẩm theo danh mục
  
- **Controller**: `ProductController.php`
  - Xử lý request xem chi tiết sản phẩm
  - Lọc và tìm kiếm sản phẩm
  
- **View**: `Views/product/`
  - Hiển thị chi tiết sản phẩm
  - Danh sách sản phẩm liên quan

## 3. Giỏ hàng
- **Model**: `CartModel.php`
  - Lưu trữ thông tin giỏ hàng
  - Tính toán tổng tiền
  
- **Controller**: `CartController.php`
  - Xử lý thêm/xóa sản phẩm khỏi giỏ hàng
  - Cập nhật số lượng sản phẩm
  
- **View**: `Views/cart/`
  - Hiển thị giỏ hàng
  - Form thanh toán

## 4. Quản lý đơn hàng
- **Model**: `OrderModel.php`
  - Lưu trữ và cập nhật trạng thái đơn hàng
  - Tương tác với bảng `orders` và `order_details`
  
- **Controller**: `OrderController.php`
  - Xử lý đặt hàng
  - Cập nhật trạng thái đơn hàng
  
- **View**: `Views/admin/orders/`
  - Danh sách đơn hàng
  - Chi tiết đơn hàng
  - Form cập nhật trạng thái

## 5. Quản lý sản phẩm (Admin)
- **Model**: `ProductModel.php`
  - Xử lý các thao tác quản lý sản phẩm
  - Tương tác với bảng `products` và `categories`
  
- **Controller**: `AdminProductController.php`
  - Xử lý các request từ admin
  - Validate dữ liệu
  - Upload hình ảnh
  
- **View**: `Views/admin/products/`
  - Dashboard quản lý sản phẩm
  - Form thêm/sửa sản phẩm
  - Danh sách sản phẩm
