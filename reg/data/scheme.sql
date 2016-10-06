CREATE TABLE IF NOT EXISTS renewfsa(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY , 
    First_Name VARCHAR(100) NOT NULL,
    Last_Name VARCHAR(100) NOT NULL,
    Email_Add VARCHAR(100) NOT NULL,
    Phone_Number VARCHAR(100) NOT NULL,
    Birthday VARCHAR(100) NOT NULL,
    School VARCHAR(200) NOT NULL,
    Degree VARCHAR(150) NOT NULL,
    Program VARCHAR(150) NOT NULL,
    Year_Entered VARCHAR(5) NOT NULL,
    Expected_Grad VARCHAR(5) NOT NULL,
    Home_Add VARCHAR(300) NOT NULL,
    City_Add VARCHAR(300) NOT NULL,
    Fb_Link VARCHAR(150) NOT NULL,
    Twitter_Link VARCHAR(100),
    Blog_Web VARCHAR(150),
    Ntl_Org VARCHAR(150),
    Uni_Org VARCHAR(150)
);

