<div class="default-sidebar">
    <!-- Begin Side Navbar -->
    <nav class="side-navbar box-scroll sidebar-scroll">
        <!-- Begin Main Navigation -->
        <ul class="list-unstyled">
            <li class="active">
                <a href="#"><i class="la la-columns"></i><span>Dashboard</span></a>
            </li>
        </ul>
        {{-- <span class="heading">Components</span> --}}
        <ul class="list-unstyled">
            <li>
                <a href="#dropdown-app" aria-expanded="false" data-toggle="collapse"><i
                        class="la la-user"></i><span>Users</span></a>
                <ul id="dropdown-app" class="collapse list-unstyled pt-0">
                    <li><a href="{{route('student.index')}}">Student</a></li>
                    <li><a href="{{route('student.create')}}">Admission</a></li>
                    <li><a href="{{route('teacher.index')}}">Teacher</a></li>
                    <li><a href="{{route('teacher.readPermission')}}">Teacher Permission</a></li>
                    <li><a href="{{route('guardian.index')}}">Parent</a></li>
                    <li><a href="{{route('accountant.index')}}">Accountant</a></li>
                    <li><a href="{{route('librarian.index')}}">Librarian</a></li>
                </ul>
            </li>
            <li><a href="#dropdown-ui" aria-expanded="false" data-toggle="collapse"><i
                        class="la la-graduation-cap"></i><span>Academic</span></a>
                <ul id="dropdown-ui" class="collapse list-unstyled pt-0">
                    <li><a href="{{route('attendance.index')}}">Daily Attendance</a></li>
                    <li><a href="{{route('routine.index')}}">Class Routine</a></li>
                    <li><a href="{{route('subject.index')}}">Subject</a></li>
                    <li><a href="{{route('syllabus.index')}}">Syllabus</a></li>
                    <li><a href="{{route('class.index')}}">Class</a></li>
                    <li><a href="{{route('classroom.index')}}">Class Room</a></li>
                    <li><a href="{{route('department.index')}}">Department</a></li>
                    <li><a href="{{route('session.index')}}">Session</a></li>
                    <li><a href="{{route('calendar.index')}}">Event Calender</a></li>
                </ul>
            </li>
            <li><a href="#dropdown-icons" aria-expanded="false" data-toggle="collapse"><i
                        class="la la-book"></i><span>Exam</span></a>
                <ul id="dropdown-icons" class="collapse list-unstyled pt-0">
                    <li><a href="{{route('mark.index')}}">Marks</a></li>
                    <li><a href="{{route('exam.index')}}">Exam</a></li>
                    <li><a href="{{route('grade.index')}}">Grade</a></li>
                    <li><a href="{{route('student.promotion')}}">Promotion</a></li>
                </ul>
            </li>
            <li><a href="#dropdown-forms" aria-expanded="false" data-toggle="collapse"><i
                        class="la la-bank"></i><span>Accounting</span></a>
                <ul id="dropdown-forms" class="collapse list-unstyled pt-0">
                    <li><a href="{{route('invoice.index')}}">Student Fee Manager</a></li>
                    <li><a href="{{route('expense_category.index')}}">Expense Category</a></li>
                    <li><a href="{{route('expense.index')}}">Expense Manager</a></li>
                </ul>
            </li>
            <li><a href="#dropdown-tables" aria-expanded="false" data-toggle="collapse"><i
                        class="la la-th-large"></i><span>Back Office</span></a>
                <ul id="dropdown-tables" class="collapse list-unstyled pt-0">
                    <li><a href="{{route('booklist.index')}}">Book List Manager</a></li>
                    <li><a href="{{route('bookIssue.index')}}">Book Issu Report</a></li>
                    <li><a href="{{route('notice.index')}}">Noticeboard</a></li>
                </ul>
            </li>
            <li><a href="#school-setting" aria-expanded="false" data-toggle="collapse"><i
                        class="la la-gear"></i><span>Setting</span></a>
                <ul id="school-setting" class="collapse list-unstyled pt-0">
                    <li><a href="{{route('session.index')}}">School Setting</a></li>
                </ul>
            </li>
        </ul>
        <!-- End Main Navigation -->
    </nav>
    <!-- End Side Navbar -->
</div>
<!-- End Left Sidebar -->
