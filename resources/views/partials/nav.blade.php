<nav>
    <ul class="navigation">
        <li>
            <a href="{{ url('/home') }}" class="{{ request()->is('home') ? 'currentpage' : '' }}">Homepage</a>
        </li>
        <li>
            <a href="{{ url('/profile') }}" class="{{ request()->is('profile') ? 'currentpage' : '' }}">Profile</a>
        </li>
        <li>
            <a href="{{ url('/dashboard') }}" class="{{ request()->is('dashboard') ? 'currentpage' : '' }}">Dashboard</a>
        </li>
        <li>
            <a href="{{ url('/blog') }}" class="{{ request()->is('blog') ? 'currentpage' : '' }}">Blog</a>
        </li>
        <li>
            <a href="{{ url('/faq') }}" class="{{ request()->is('faq') ? 'currentpage' : '' }}">FAQ</a>
        </li>
    </ul>

    <aside class="dropdown">
        <button onclick="dropDown()" class="dropbtn">Info</button>
        <div id="myDropdown" class="dropdown-content">
            <a href="https://oer.hz.nl/6978cdea-fb31-430b-9bf9-63206aa07754" target="_blank">HBO-ICT CER</a>
            <a href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2023-2024/Juli/TWE/IR-B-HBO-ICT-full-time-2023-2024-DEF.pdf"
               target="_blank">IR HBO-ICT</a>
            <a href="https://learn.hz.nl/my/" target="_blank">Learn enviroment</a>
            <a href="https://hz.osiris-student.nl/#/home" target="_blank">Study progress</a>
            <a href="https://github.com/HZ-HBO-ICT" target="_blank">Github</a>
        </div>
    </aside>
</nav>
