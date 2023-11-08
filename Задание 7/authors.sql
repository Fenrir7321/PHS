CREATE TABLE Authors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255),
    birth_date DATE,
    death_date DATE
);

INSERT INTO Authors (full_name, birth_date, death_date) VALUES
    ('Лев Николаевич Толстой', '1828-09-09', '1910-11-20'),
    ('Джордж Оруэлл', '1903-06-25', '1950-01-21'),
    ('Иван Сергеевич Тургенев', '1818-11-09', '1883-09-03');