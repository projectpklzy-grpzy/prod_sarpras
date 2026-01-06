# SARPRAS (Sarana Prasarana) API

Sistem manajemen sarana prasarana berbasis Laravel untuk institusi pendidikan. API ini mengelola aset fisik seperti lahan, bangunan, kendaraan, lapangan, dan peralatan beserta transaksi penyewaannya.

## 🏗️ Arsitektur

- **Framework**: Laravel 12.x
- **Database**: MySQL
- **Authentication**: JWT (tymon/jwt-auth)
- **Pattern**: Repository + Service Layer
- **Testing**: PHPUnit
- **API Documentation**: Postman Collection

## 📋 Fitur Utama

- ✅ Manajemen Lahan (CRUD + Search)
- 🚧 Manajemen Bangunan (Coming Soon)
- 🚧 Manajemen Kendaraan (Coming Soon)
- 🚧 Manajemen Lapangan (Coming Soon)
- 🚧 Manajemen Peralatan (Coming Soon)
- 🚧 Sistem Penyewaan (Coming Soon)
- 🚧 JWT Authentication (Coming Soon)
- ✅ Audit Trail
- ✅ Soft Deletes
- ✅ API Response Standardization

## 🚀 Installation

### Prerequisites
- PHP 8.2+
- Composer
- MySQL 8.0+
- Node.js & NPM (untuk asset compilation)

### Setup Steps

1. **Clone & Install Dependencies**
```bash
git clone <repository-url>
cd prod_sarpras
composer install
npm install
```

2. **Environment Configuration**
```bash
cp .env.example .env
php artisan key:generate
```

3. **Database Configuration**
Edit `.env` file:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=prod_sarpras
DB_USERNAME=root
DB_PASSWORD=
```

4. **Database Migration**
```bash
php artisan migrate
```

5. **Install JWT (Optional - for future auth)**
```bash
composer require tymon/jwt-auth:^2.0
php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
php artisan jwt:secret
```

## 🧪 Testing

### Run All Tests
```bash
php artisan test
```

### Run Specific Test Suite
```bash
php artisan test --testsuite=Feature
php artisan test tests/Feature/Api/LahanApiTest.php
```

### Test Coverage
```bash
php artisan test --coverage
```

## 📡 API Endpoints

### Base URL
```
http://localhost:8000/api/v1
```

### Health Check
```http
GET /api/v1/health
```

### Lahan Endpoints

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/lahan` | Get all lahan (paginated) |
| POST | `/lahan` | Create new lahan |
| GET | `/lahan/{id}` | Get specific lahan |
| PUT | `/lahan/{id}` | Update lahan |
| DELETE | `/lahan/{id}` | Delete lahan (soft delete) |
| GET | `/lahan/search?q={query}` | Search lahan by name |

### Request/Response Examples

#### Create Lahan
```http
POST /api/v1/lahan
Content-Type: application/json

{
    "nama_lahan": "Area Kampus 1",
    "luas_lahan": 10000.50,
    "kepemilikan": "Milik Sendiri",
    "harga_perolehan_lahan": 5000000000.00
}
```

#### Success Response
```json
{
    "status": "success",
    "message": "Lahan berhasil dibuat",
    "code": 201,
    "data": {
        "id": 1,
        "nama_lahan": "Area Kampus 1",
        "luas_lahan": 10000.50,
        "kepemilikan": "Milik Sendiri",
        "harga_perolehan_lahan": 5000000000.00,
        "status": "aktif",
        "date_created": "2024-01-01 10:00:00",
        "date_updated": null
    }
}
```

#### Error Response
```json
{
    "status": "error",
    "message": "Validation failed",
    "code": 422,
    "errors": {
        "nama_lahan": ["Nama lahan wajib diisi"]
    }
}
```

## 🗄️ Database Schema

### Existing Tables (Legacy)
- `ci_jwt` - JWT tokens storage
- `ci_session` - CodeIgniter sessions (preserved)
- `tbsar_lahan` - Land/area data
- `tbsar_bangunan` - Building data
- `tbsar_bangunan_file` - Building files
- `tbsar_bangunan_sewa` - Building rental transactions
- `tbsar_kendaraan` - Vehicle data
- `tbsar_lapang` - Field/court data
- `tbsar_peralatan` - Equipment/inventory data

### Modernization Changes
- Added Laravel `timestamps()` and `softDeletes()`
- Converted `bisa_dipinjam` ENUM to boolean
- Added proper foreign key constraints
- Added performance indexes
- UTF8MB4 collation for better Unicode support

## 🏛️ Architecture Patterns

### Repository Pattern
```php
// Interface
App\Repositories\Contracts\LahanRepositoryInterface

// Implementation
App\Repositories\LahanRepository
```

### Service Layer
```php
App\Services\LahanService
```

### API Resources
```php
App\Http\Resources\LahanResource
```

### Form Requests
```php
App\Http\Requests\Api\StoreLahanRequest
```

### Custom Exceptions
```php
App\Exceptions\Api\ApiException
App\Exceptions\Api\ResourceNotFoundException
```

### Traits
```php
App\Traits\ApiResponse    // Standardized API responses
App\Traits\AuditTrail     // Audit logging
```

## 🔧 Development

### Start Development Server
```bash
php artisan serve
```

### Watch Assets (if needed)
```bash
npm run dev
```

### Code Style
```bash
./vendor/bin/pint
```

## 📋 Frontend Mockups

Kerangka HTML statis tersedia di:
- `public/lahan/index.html` - Daftar lahan
- `public/lahan/form.html` - Form lahan
- `public/bangunan/` - (Coming soon)
- `public/kendaraan/` - (Coming soon)

**Note**: File HTML ini hanya kerangka visual, tanpa JavaScript atau logika.

## 🚧 Roadmap

### Phase 1 (Current)
- [x] Lahan CRUD API
- [x] Repository Pattern
- [x] Service Layer
- [x] API Resources
- [x] Form Validation
- [x] Unit Tests
- [x] Basic Frontend Mockups

### Phase 2 (Next)
- [ ] JWT Authentication
- [ ] Bangunan CRUD API
- [ ] File Upload Management
- [ ] Advanced Search & Filtering
- [ ] Postman Collection

### Phase 3 (Future)
- [ ] Kendaraan, Lapang, Peralatan APIs
- [ ] Rental/Sewa Management
- [ ] Reporting & Analytics
- [ ] Role-based Permissions
- [ ] API Rate Limiting

## 🤝 Contributing

1. Fork the repository
2. Create feature branch (`git checkout -b feature/amazing-feature`)
3. Commit changes (`git commit -m 'Add amazing feature'`)
4. Push to branch (`git push origin feature/amazing-feature`)
5. Open Pull Request

## 📄 License

This project is licensed under the MIT License.

---

**Built with ❤️ for Indonesian Educational Institutions**
