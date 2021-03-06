<!-- 
- Document    : index.php
- Created on  : 02-March-2015, 00:30:12
- Author      : MInc <minconline@gmail.com>
- Description : 
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>My Phone Gap App</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
        <link rel="stylesheet" href="assets/css/library/jquery.mobile-1.4.4.min.css" />
        <script src="assets/js/library/jquery-2.1.1.min.js"></script>
        <script src="assets/js/library/jquery.mobile-1.4.4.min.js"></script>
        <script src="assets/js/app.action.js"></script>
    </head>
    <body>
        <div data-role="page" id="app-calculator">
            <div data-role="header" data-position="fixed">
                <h1>Calculator App</h1>
            </div>
            <div role="main" class="ui-content">
                <form id="app-calculator-form" data-ajax="false">
                    <div data-role="fieldcontain">
                        <label for="number_one">First Number:</label>
                        <input type="number" step="any" name="number_one" id="number_one">
                    </div>
                    <div data-role="fieldcontain">
                        <label for="number_two">Second Number:</label>
                        <input type="number" step="any" name="number_two" id="number_two">
                    </div>
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup">
                            <legend>Arithmetic Operation:</legend>
                            <input type="radio" class="operation" name="operation" id="operation-add" value="add" checked>
                            <label for="operation-add">Add</label>
                            <input type="radio" class="operation" name="operation" id="operation-subtract" value="subtract">
                            <label for="operation-subtract">Subtract</label>
                            <input type="radio" class="operation" name="operation" id="operation-multiply" value="multiply">
                            <label for="operation-multiply">Multiply</label>
                            <input type="radio" class="operation" name="operation" id="operation-divide" value="divide">
                            <label for="operation-divide">Divide</label>
                        </fieldset>
                    </div>
                    <input type="submit" name="calculate" value="Calculate">
                </form>
            </div>
        </div>
        <div data-role="dialog" id="app-response">
            <div data-role="header">
                <h1>Calculator App - Result</h1>
            </div>
            <div role="main" class="ui-content">
                <h1 style="text-align: center;">Response</h1>
                <p style="text-align: center;" class="reponse-content"></a></p>
                <p><a href="#app-calculator" data-role="button" data-rel="back">OK</a></p>
            </div>
        </div>
    </body>
</html>
