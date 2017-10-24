SELECT country_name, TotalMedals
FROM TBL_COUNTRIES C LEFT JOIN (
SELECT country_code, SUM(count) AS TotalMedals 
FROM TBL_MEDALS 
GROUP BY country_code) M 
ON C.country_code=M.country_code;