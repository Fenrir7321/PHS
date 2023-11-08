CREATE TABLE Books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    author VARCHAR(255),
    page_count INT
);

INSERT INTO Books (title, author, page_count) VALUES
    ('Война и мир', 'Лев Николаевич Толстой', 1300),
    ('1984', 'Джордж Оруэлл', 320),
    ('Муму', 'Иван Сергеевич Тургенев', 124);