CREATE TABLE TimeRecorder (
    id INT AUTO_INCREMENT PRIMARY KEY,
    staff_id INT,
    datetime_in DATETIME,
    datetime_out DATETIME,
    timeworked TIME,
    status VARCHAR(20),
    FOREIGN KEY (staff_id) REFERENCES staff(id)
);

