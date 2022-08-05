# Admin Panel With Sanctum API
Tgas Magang Dari DOT Admin Panel Rest API
Menggunakan Token Auth 
Laravel Sanctum

# ScreenShot Aplikasi

# Login
![Screenshot (25)](https://user-images.githubusercontent.com/109582141/182990383-6104cc5b-bd92-4ef8-9d7a-9fdef964cbca.png)

# Registrasi
![Screenshot (34)](https://user-images.githubusercontent.com/109582141/182990632-06a4fa05-19a4-4ce5-9ff9-e0985681e3c6.png)

# List Data
![Screenshot (33)](https://user-images.githubusercontent.com/109582141/182990742-dbacbbf9-9409-406d-afd3-1da0c4fa9bfd.png)

# List User
![Screenshot (32)](https://user-images.githubusercontent.com/109582141/182990786-c0301898-a378-4ff9-9322-77ce2957d34a.png)

# Sanctum API With Token
# Set Header
![Screenshot (35)](https://user-images.githubusercontent.com/109582141/182992214-ce220790-0088-4dcf-883e-6f1fa476b4f0.png)
# Login
```diff
POST /api/login
```
![Screenshot (36)](https://user-images.githubusercontent.com/109582141/182993757-7edf771a-6dfb-4c26-b92a-3c2dfb480d5d.png)

# Logout
```diff
POST /api/logout
```
![Screenshot (39)](https://user-images.githubusercontent.com/109582141/182993947-47870247-a655-452f-9bf2-1484d3422a74.png)

# Register and get your token auth
```diff
POST /api/register
```
![Screenshot (37)](https://user-images.githubusercontent.com/109582141/182994181-89cc5a53-9d38-44b7-a880-3d70079e090c.png)

# Set Auth Token
![Screenshot (38)](https://user-images.githubusercontent.com/109582141/182996246-bdf602c1-4044-40bb-b790-0aeb6e156153.png)


# If you use auth token then you can access all routes
```diff
# Public Routes
POST /api/login
POST /api/register
# Posts
GET /api/posts
GET /api/posts/{id}
GET  /api/posts/judul
#Protected Routes
POST /api/logout
#Posts
POST /api/posts
PUT /api/posts/{id}
DELETE /api/posts/{id}
```
Here i do not create a user api because i think it is the privacy of the person who uses my application

# Desain DATABASE
![Screenshot (24)](https://user-images.githubusercontent.com/109582141/182996634-d055b1ed-774e-49e6-b976-216a0d88c3b4.png)
