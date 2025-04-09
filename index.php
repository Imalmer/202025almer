<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Output 1</title>
    <style>
        body {
            font-family: "Arial";
            margin: 0;
            padding: 20px;
            background-color: #f4f4f9;
        }
        fieldset {
            border: 2px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            background-color: #fff;
        }
        legend {
            font-size: 1.2em;
            font-weight: bold;
        }
        table {
            width: 100%;
        }
        td {
            padding: 8px;
        }
        input[type="text"], input[type="email"], input[type="tel"], input[type="number"], input[type="submit"], input[type="reset"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            font-size: 1em;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"], input[type="reset"] {
            width: auto;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>PHP Output No. 1</h1>
    
    <fieldset>
        <legend>This form uses GET request</legend>
        <form action="redirect.php" method="GET">
        <table>
            <tr>
                <td>First Name</td>
                <td>
                    <input type="text" name="fname" placeholder="Enter First Name" required />
                </td>
            </tr>
            <tr>
                <td>Middle Name</td>
                <td>
                    <input type="text" name="mname" placeholder="Enter Middle Name" required />
                </td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td>
                    <input type="text" name="lname" placeholder="Enter Last Name" required />
                </td>
            </tr>
            <tr>
                <td>Age</td>
                <td>
                    <input type="number" name="age" placeholder="Enter Age" required min="1" />
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <select name="gender" required>
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="email" name="email" placeholder="Enter Email" required />
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td>
                    <input type="text" name="address" placeholder="Enter Address" required />
                </td>
            </tr>
            <tr>
                <td>Contact Number</td>
                <td>
                    <input type="tel" name="contact" placeholder="Enter Contact Number" required pattern="[0-9]{10}" title="10 digit phone number" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Submit Data">
                    <input type="reset" value="Cancel">
                </td>
            </tr>
        </table>
        </form>
    </fieldset>
    
    <fieldset style="margin-top: 20px">
        <legend>This form uses POST request</legend>
        <form action="redirect.php" method="POST">
        <table>
            <tr>
                <td>First Name</td>
                <td>
                    <input type="text" name="fname" placeholder="Enter First Name" required />
                </td>
            </tr>
            <tr>
                <td>Middle Name</td>
                <td>
                    <input type="text" name="mname" placeholder="Enter Middle Name" required />
                </td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td>
                    <input type="text" name="lname" placeholder="Enter Last Name" required />
                </td>
            </tr>
            <tr>
                <td>Age</td>
                <td>
                    <input type="number" name="age" placeholder="Enter Age" required min="1" />
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <select name="gender" required>
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="email" name="email" placeholder="Enter Email" required />
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td>
                    <input type="text" name="address" placeholder="Enter Address" required />
                </td>
            </tr>
            <tr>
                <td>Contact Number</td>
                <td>
                    <input type="tel" name="contact" placeholder="Enter Contact Number" required pattern="[0-9]{10}" title="10 digit phone number" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Submit Data">
                    <input type="reset" value="Cancel">
                </td>
            </tr>
        </table>
        </form>
    </fieldset>

</body>
</html>
