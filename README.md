# Patient-Vital-Status-Checker

Project structure:

patient_vital_checker/
├── index.php
├── validate.php
├── rules.php
├── scanner.php
└── vitals.php

Goal
Trainees will create a simple healthcare validation program that:
Validates patient vital values (BP, Temperature, Pulse)


Uses one higher-order function to apply different rules


Applies callbacks for each clinical rule


Uses a recursive function to list project files


Helps beginners understand how EMR systems validate vitals



Step-by-Step Instructions

1. Create Patient Vital Data
File: vitals.php
Create a PHP array containing:
patient_name


vital_type (BP / Temperature / Pulse)


value


Example (logic only, not code):
Arun – Temperature – 102


Fenix – Pulse – 110


Kumar – BP – 120/80



2. Create Higher-Order Validation Function
File: validate.php
Create a function:
validateVital($vitalData, $ruleFunction)

What it should do:
Accept one vital record


Accept a callback function


Call the callback and return the result


👉 This is the higher-order function.

3. Create Clinical Rule Functions (Callbacks)
File: rules.php
Create separate functions:
checkTemperature()


checkPulse()


checkBloodPressure()


Each function should:
Accept vital data


Check normal / high / low values


Return updated vital data with:


status (NORMAL / HIGH / LOW)


message (Fever detected, Pulse high, etc.)


These functions are callbacks.

4. Use the Rule Engine
File: index.php
Steps:
Load all files using include


Read vitals from vitals.php


Loop through vitals


Based on vital type:


Pass the correct rule function to validateVital()


Print result for each patient



5. Create Recursive File Scanner
File: scanner.php
Create a recursive function:
scanFolder($path)

Function behavior:
List all files and folders


Skip . and ..


If folder → call itself again


Purpose:
Help beginners understand recursion


Simulate healthcare system module scanning



6. Call Recursive Scanner
At the bottom of index.php:
Call scanFolder(__DIR__)


Print project structure



Expected Output (Simple)
Patient: Arun
Vital: Temperature
Value: 102
Status: HIGH
Message: Fever detected
----------------------

Patient: Fenix
Vital: Pulse
Value: 110
Status: HIGH
Message: Pulse rate high
----------------------

Project Files:
File: index.php
File: validate.php
File: rules.php
File: vitals.php
File: scanner.php


Why This Task Is Beginner-Friendly
✔ One loop
 ✔ One higher-order function
 ✔ Simple callbacks
 ✔ Clear healthcare example
 ✔ Easy recursion
 ✔ No advanced PHP concepts

Trainer Evaluation Checklist
Uses callback correctly


No duplicate loops


Correct vital status


Recursive function works


Clean output
