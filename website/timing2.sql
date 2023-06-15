
CREATE TABLE TimeRecords (
    id INT AUTO_INCREMENT PRIMARY KEY,
    datetime_in DATETIME,
    datetime_out DATETIME,
    status VARCHAR(20) AS (
        CASE
            WHEN datetime_in IS NOT NULL AND datetime_out IS NULL THEN 'Working'
            WHEN datetime_in IS NOT NULL AND datetime_out IS NOT NULL THEN 'Not at work'
            ELSE ''
        END
    ) VIRTUAL
);


-- Update status to 'Working' if datetime_in has a value and datetime_out is NULL
UPDATE TimeRecords SET status = 'Working' WHERE datetime_in IS NOT NULL AND datetime_out IS NULL;

-- Update status to 'Not at work' if both datetime_in and datetime_out have values
UPDATE TimeRecords SET status = 'Not at work' WHERE datetime_in IS NOT NULL AND datetime_out IS NOT NULL;