<?php

// Choice
/**
 * Gender เพศ
 */
$arr_Gender = [
    "ชาย",
    "หญิง",
    "LGBT"
];
$arr_Gender_Choice = [
    "Male",
    "Female",
    "LGBT"
];

/**
 * Age อายุ
 */
$arr_age = [
    "21 - 25 ปี",
    "26 - 30 ปี",
    "31 - 35 ปี",
    "36 - 40 ปี",
    "41 - 45 ปี",
    "46 - 50 ปี",
    "51 - 55 ปี",
];
$arr_age_choice = [
    "21 - 25 Year",
    "26 - 30 Year",
    "31 - 35 Year",
    "36 - 40 Year",
    "41 - 45 Year",
    "46 - 50 Year",
    "51 - 55 Year",
];

/**
 * Career อาชีพ
 */
$arr_career = [
    "ข้าราชการ/รัฐวิสาหกิจ/ลูกจ้าง",
    "พนักงานบริษัทเอกชน",
    "รับจ้างทั่วไป",
    "อาชีพอิสระ/ค้าขาย/ธุรกิจส่วนตัว",
];
$arr_career_choice = [
    "employee",
    "private company",
    "general employee",
    "personal business",
];

/**
 * Salary เงินเดือน
 */
$arr_salary = [
    "ประมาณ 15,001 - 20,000",
    "ประมาณ 20,001 - 25,000",
    "ประมาณ 25,001 - 30,000",
    "ประมาณ 30,001 - 35,000",
    "ประมาณ 35,001 - 40,000",
    "ประมาณ 40,001 - 45,000",
    "ประมาณ 45,001 - 50,000",
    "ประมาณ 55,001 - 60,000",
    "ประมาณ 60,000 บาทขึ้นไป",
];
$arr_salary_choice = [
    "15001 - 20000",
    "20001 - 25000",
    "25001 - 30000",
    "30001 - 35000",
    "35001 - 40000",
    "40001 - 45000",
    "45001 - 50000",
    "55001 - 60000",
    "60000 Up",
];


/**
 * บุคคลที่ท่องเที่ยวร่วมกับท่าน
 */
// หัวข้อ: บุคคลที่ท่องเที่ยวร่วมกับท่าน
$arr_friend = [
    "เที่ยวคนเดียว",
    "กลุ่มเพื่อน",
    "ครอบครัวหรือญาติ",
    "คนพิเศษ",
    "บริษัททัวร์",
    "อื่นๆ",
];
$arr_friend_choice = [
    "solo travel",
    "group friends",
    "family relative",
    "special person",
    "tour company",
    "other",
];

/**
 * ระยะเวลาในการท่องเที่ยวของท่าน
 */
$arr_time_travel = [
    "วันเดียว (ไปเช้าเย็นกลับ)",
    "2 วัน 1 คืน",
    "3 วัน 2 คืน",
    "4 วัน 3 คืน",
    "5 วัน 4 คืน",
    "6 วัน 5 คืน",
    "7 วัน 6 คืน",
    "มากกว่า 7 วัน"
];
$arr_time_travel_choice = [
    "one day",
    "2 day",
    "3 day",
    "4 day",
    "5 day",
    "6 day",
    "7 day",
    "more then 7 day"
];

/**
 * หัวข้อ: ค่าใช้จ่ายในการเดินทาง (ค่าเดินทาง ค่าอาหาร  ค่าที่พัก และอื่นๆ)
 */

$arr_expenses_travel  = [
    "ต่ำกว่า 5,000 บาท",
    "ประมาณ 5,001 - 6,000 บาท",
    "ประมาณ 6,001 - 7,000 บาท",
    "ประมาณ 7,001 - 8,000 บาท",
    "ประมาณ 8,001 - 9,000 บาท",
    "ประมาณ 9,001 - 10,000 บาท",
    "มากกว่า 10,000 บาท",
];
$arr_expenses_travel_choice  = [
    "< 5000",
    "5001 - 6000",
    "6001 - 7000",
    "7001 - 8000",
    "8001 - 9000",
    "9001 - 10000",
    "> 10000",
];

// หัวข้อ: ความต้องการในการมาท่องเที่ยวของท่าน
$arr_decide_Travel = [
    "สถานที่ท่องเที่ยวที่มีความปลอดภัย",
    "สถานที่ท่องเที่ยวที่มีบรรยากาศดี",
    "เป็นเอกลักษณ์",
    "มีความสวยงามเป็นธรรมชาติ",
    "ความงดงามของสถานที่ท่องเที่ยว",
    "ความหลากหลายของแหล่งท่องเที่ยว",
    "มีสถานที่ควรค่าแก่การสักการะ",
    "มีความสมบูรณ์ทางโบราณวัตถุ",
    "มีความทันสมัยทางด้านเทคโนโลยี",
    "มีหลากหลายเส้นทางการเข้าถึง",
    "สภาพถนนไม่ขรุขระ",
    "มีแหล่งศึกษาวัฒนธรรม",
    "ได้เปิดโลกกว้าง",
    "ได้ความรู้ในการท่องเที่ยว",
    "มีสินค้าท้องถิ่นจัดจำหน่าย",
    "มีแหล่งศึกษาธรรมชาติ",
    "ได้รับความสนุกสนานเพลิดเพลิน",
    "มีจุดให้นั่งพักผ่อนหรือรับประทานอาหาร",
];

$arrDecideChoice = [
    5,
    4,
    3,
    2,
    1
];
