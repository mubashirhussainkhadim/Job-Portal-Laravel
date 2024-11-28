# **Job Portal Laravel Project**
<img width="1431" alt="Screenshot 2024-11-29 at 1 06 51 AM" src="https://github.com/user-attachments/assets/7a3b020c-a2da-4a30-b36c-02e47c5db776">

A dynamic and feature-rich Job Portal built using Laravel. This application allows job seekers to explore job opportunities and apply for them, while employers can post and manage job listings.

---

## **Features**

- **Job Listings**: Display a list of featured and available jobs with details like job title, salary, and description.
- **Search and Filter**: Easily search for jobs based on keywords, location, or categories.
- **User Roles**:
  - Job Seekers: Sign up, create profiles, and apply for jobs.
  - Employers: Post job listings and manage applications.
- **Responsive Design**: Optimized for both desktop and mobile devices.
- **Tags and Categories**: Organize jobs with relevant tags and categories.
- **Salary Information**: Display salary details for each job listing.

---

## **Technologies Used**

- **Framework**: Laravel (PHP)
- **Frontend**: Blade Templating, Bootstrap/Tailwind CSS (customizable)
- **Database**: MySQL
- **Authentication**: Laravel Breeze/Jetstream (or custom)
- **Other Tools**: Composer, Artisan Commands, Git

---

## **Getting Started**

### Prerequisites

Ensure you have the following installed on your system:
- PHP >= 8.4
- Composer
- MySQL
- Node.js & npm (for frontend assets)

### Installation Steps

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/mubashirhussainkhadim/Job-Portal-Laravel.git
   cd Job-Portal-Laravel
   ```

2. **Install Dependencies**:
   ```bash
   composer install
   npm install
   npm run dev
   ```

3. **Configure Environment**:
   - Copy `.env.example` to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Update the `.env` file with your database and mail configurations.

4. **Generate Application Key**:
   ```bash
   php artisan key:generate
   ```

5. **Run Migrations and Seeders**:
   ```bash
   php artisan migrate --seed
   ```

6. **Start the Application**:
   ```bash
   php artisan serve
   ```

7. **Access the Application**:
   Open your browser and navigate to [http://localhost:8000](http://localhost:8000).

---

## **Usage**

- **Job Seekers**:
  - Sign up or log in.
  - Browse featured jobs or search for specific roles.
  - Apply for jobs with a single click.

- **Employers**:
  - Post new job listings.
  - Manage applications.

---

## **Contributing**

Contributions are welcome! To contribute:
1. Fork the repository.
2. Create a new branch:
   ```bash
   git checkout -b feature-branch
   ```
3. Make your changes and commit:
   ```bash
   git commit -m "Add new feature"
   ```
4. Push to your fork:
   ```bash
   git push origin feature-branch
   ```
5. Open a pull request.

---

## **License**

This project is licensed under the MIT License. See the `LICENSE` file for details.

---

## **Contact**

For inquiries or support, feel free to reach out to:

- **Author**: Mubashir Hussain  
- **Email**: [mubashirhussainkhadim@gmail.com](mailto:mubashirhussainkhadim@gmail.com)  
- **GitHub**: [mubashirhussainkhadim](https://github.com/mubashirhussainkhadim)

---
```

Place this file in the root directory of your project as `README.md`. When you push your repository to GitHub, it will automatically display this content on the repository's homepage.
