
CREATE TABLE IF NOT EXISTS resumes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    address VARCHAR(255),
    phone VARCHAR(20),
    email VARCHAR(100),
    objective TEXT,
    education TEXT,
    personal_info TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO resumes (name, address, phone, email, objective, education, personal_info)
VALUES ('John Alvaro F. Juani', '339 Magalang St., Bagong Nayon, Baliwag, Bulacan', '0928-228-5531', 'johnjuani178@gmail.com', 'To use my knowledge and technical skills to gain experience...', 
'College: Dalubhasaang Politekniko ng Lungsod ng Baliwag...\nSecondary: Dalubhasaang Politekniko ng Lungsod ng Baliwag SHS...', 
'Date of Birth: December 4, 2001\nPlace of Birth: Baliuag, Bulacan\nAge: 22 years old\nSex: Male\nNationality: Filipino\nCivil Status: Single\nHeight: 5\'7"\nWeight: 60 kg');
SELECT * FROM demo;