# Laravel‑React Multi‑Auth

A starter project that integrates **Laravel (backend)** with **React + Vite (frontend)** providing a **multi‑auth system** for multiple user roles (e.g., admin, user).



![App Overview](public/image.png)

![Unauthorized Overview](public/unauthorized.png)


---

## ✨ Features
- Multi‑authentication (supporting different user types such as Admin and User).  
- Laravel backend with API support.  
- React frontend powered by Vite + TypeScript.  
- Ready‑to‑use boilerplate for scalable applications.  

---

## 📦 Requirements
- PHP >= 8.x  
- Composer  
- Node.js & npm  
- MySQL or another database supported by Laravel  

---

## ⚡ Installation & Setup

### Backend (Laravel)
1. Clone repository:
   ```bash
   git clone https://github.com/fajarsid/laravel-react-multi-auth.git
   cd laravel-react-multi-auth
   ```

2. Install dependencies:
   ```bash
   composer install
   ```

3. Copy `.env` file and generate app key:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Configure your database in `.env`, then run migrations:
   ```bash
   php artisan migrate
   ```

5. Start Laravel server:
   ```bash
   php artisan serve
   ```

---

### Frontend (React + Vite)
1. Navigate to the frontend folder (if separated).  
2. Install dependencies:
   ```bash
   npm install
   ```

3. Run development server:
   ```bash
   npm run dev
   ```

4. Access the frontend at `http://localhost:3000` (or Vite's default port).

---

## 🔄 Workflow
1. Laravel handles backend logic, authentication, and APIs.  
2. React frontend consumes APIs for login, registration, and dashboards.  
3. Ensure correct environment setup for CORS, guards, and API endpoints.  

---

## 📂 Project Structure
- `app/`, `routes/`, `config/` → Laravel backend  
- `resources/js/`, `components/` (or `frontend/`) → React frontend code  
- `database/migrations/` → Database migrations  
- `tests/` → Tests (if available)  

---

## 🤝 Contribution
1. Fork this repository.  
2. Create a new branch:  
   ```bash
   git checkout -b feature-branch
   ```  
3. Commit changes:  
   ```bash
   git commit -m "Add new feature"
   ```  
4. Push to branch:  
   ```bash
   git push origin feature-branch
   ```  
5. Open a Pull Request.  

---

## 📄 License
This project is licensed under the MIT License. See [LICENSE](LICENSE) for more information.
