<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSITAN - CSIT notes - past_year_questions - news - syllabus - quiz - solutions - pyq_qsn - pyq_qsn_soln</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="blogstyle.css">
    <!-- <script src="https://kit.fontawesome.com/8ca15bada1.js" crossorigin="anonymous"></script> -->
</head>
<body>
<div id="header">
    <div class="container">
        <nav>
            <ul id="sidemenu" class="flex-nav">
                <!-- Tab 1 -->
                <li class="tab">
                    <a href="#header">pyq_qsn</a>
                    <div class="tab-content hd1">
                        <?php
                        // Sample data, replace with database queries or dynamic data
                        $subjects = [
                            'DS' => 'Discrete Structure',
                            'OOP(C++)' => 'OOP (C++)',
                            'MP' => 'Microprocessor',
                            'MATH' => 'Mathematics - II',
                            'STAT' => 'Statistics - I'
                        ];
                        $years = range(2065, 2081);

                        foreach ($subjects as $key => $subject) {
                            echo "<div class='option-group'>";
                            echo "<a href='#{$key}'>{$subject}</a>";
                            echo "<div class='nested-options'>";
                            foreach ($years as $year) {
                                echo "<a href='#pyq_qsn_{$key}_{$year}'>{$year}</a>";
                            }
                            echo "</div></div>";
                        }
                        ?>
                    </div>
                </li>
                
                <!-- Tab 2 -->
                <li class="tab">
                    <a href="#about">syllabus</a>
                    <div class="tab-content hd2">
                        <?php
                        foreach ($subjects as $key => $subject) {
                            echo "<div class='option-group'><a href='#{$key}'>{$subject}</a></div>";
                        }
                        ?>
                    </div>
                </li>
                
                <!-- Tab 3 -->
                <li class="tab">
                    <a href="#services">note</a>
                    <div class="tab-content hd3">
                        <?php
                        // Sample nested data for notes
                        $notes = [
                            'DS' => ['Basic_Discrete_Structure', 'Integers_And_Matrices', 'Logic_And_Proof_Methods', 'Induction_And_Recursion', 'Counting_And_Discrete_Probablity', 'Relations_And_Graphs'],
                            'OOP(C++)' => ['Introduction_To_OOP', 'Basics_Of_C++_Programming', 'Classes_And_Objects', 'Operator_Overloading', 'Inheritance', 'Virtual_Functions,_Polymorphism,_And_Miscellaneous_C++_Features', 'Function_Templates_Amd_Exception_Handling', 'File_Handling'],
                            'MP' => ['Introduction_To_MP', 'Basics_Architecture', 'Instruction_Cycle', 'Assembly_Language_Programming', 'Basic_I/O,_Memory_R/W,_And_Interrupt_Operations', 'Input/Output_Interfaces', 'Advanced_Microprocessor'],
                            'MATH' => ['Linear_Equations_In_Linear_Algebra', 'Transformations', 'Matrix_Algebra', 'Determinants', 'Vector_Spaces', 'Vector_Spaces_continued', 'Eigen_Values_Eigen_Vectors', 'Orthogonality_And_Least_Squares', 'Groups_And_Subgroups', 'Rings_And_Fields'],
                            'STAT' => ['Introduction', 'Descriptive_Statistics', 'Introduction_To_Probability', 'Sampling', 'Random_Variables_And_Mathematical_Expectations', 'Probability_Distributions', 'Correlation_And_Linear_Regression']
                        ];

                        foreach ($notes as $key => $noteSections) {
                            echo "<div class='option-group'><a href='#{$key}'>{$subjects[$key]}</a><div class='nested-options'>";
                            foreach ($noteSections as $section) {
                                echo "<a href='#{$section}'>{$section}</a>";
                            }
                            echo "</div></div>";
                        }
                        ?>
                    </div>
                </li>
                <a href="index.html"><img src="images/logo.png" class="logo" alt="Logo"></a>
                
                <!-- Tab 4 -->
                <li class="tab">
                    <a href="#portfolio">news</a>
                    <div class="tab-content hd4">
                        <div class="option-group">
                            <a href="#link7">Option 7</a>
                            <div class="nested-options">
                                <a href="#sub-link138">Sub Option 138</a>
                                <a href="#sub-link139">Sub Option 139</a>
                                <a href="#sub-link140">Sub Option 140</a>
                            </div>
                        </div>
                        <div class="option-group">
                            <a href="#link8">Option 8</a>
                            <div class="nested-options">
                                <a href="#sub-link159">Sub Option 159</a>
                                <a href="#sub-link160">Sub Option 160</a>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- Additional Tabs as needed -->
            </ul>
        </nav>
    </div>
</div>
</body>
</html>
