<?php 
    $title = "Grading";
    $path = "../";

    include($path . "assets/inc/header.php");

?>

<div class="header-container-aboutus" style="background-image: url('<?php echo $path; ?>assets/images/pristina_header.png');"> 
<?php 
    include($path . "assets/inc/nav.php");

?>
<div class="opening-text">
        <h1 class="h1-mu">GRADING</h1>
      </div>
    </div>
    <h1>Grading Page</h1>

    <h1>General Things Done</h1>
    <table>
        <tr>
            <th>Feature</th>
            <th>Description</th>
        </tr>
        <tr>
            <td>Modular Code Structure</td>
            <td>Implemented each page using include PHP, ensuring modularity and avoiding code repetition.</td>
        </tr>
        <tr>
            <td>PHP $title Element</td>
            <td>Implemented $title element in PHP to customize page attributes. For example, setting $title = "About Page" allows for specific styles or functionality in navigation bar and other elements tailored to that page. Enhances website flexibility and customization.</td>
        </tr>
        <tr>
            <td>Comments Form</td>
            <td>Created a comments form allowing users to leave feedback or reviews on the website.</td>
        </tr>
        <tr>
            <td>Review Form</td>
            <td>Developed a review form where users can provide their name and leave reviews for various elements on the page or for the city.</td>
        </tr>
        <tr>
            <td>Custom JavaScript</td>
            <td>Implemented original JavaScript functionalities, including a slideshow for pictures and a hamburger menu.</td>
        </tr>
        <tr>
            <td>DHTML Elements</td>
            <td>Included dynamic HTML elements, such as interactive slideshows triggered by user actions.</td>
        </tr>
    </table>

    <h1>EXTRA Features</h1>
    <table>
        <tr>
            <th>Feature</th>
            <th>Description</th>
        </tr>
        <tr>
            <td>Hamburger Menu</td>
            <td>Implemented a responsive navigation menu that transitions into a hamburger menu on smaller screen sizes.</td>
        </tr>
        <tr>
            <td>Responsive Design</td>
            <td>Ensured that all elements on the page are responsive, providing a consistent user experience across devices.</td>
        </tr>
        <tr>
            <td>Animated Hamburger Menu</td>
            <td>Added a small animation effect to the hamburger menu for a more engaging user interaction.</td>
        </tr>
        <tr>
            <td>reCAPTCHA Integration</td>
            <td>Integrated reCAPTCHA into selected form submissions to prevent spam and enhance security.</td>
        </tr>
        <tr>
            <td>Reviews Page</td>
            <td>Developed a reviews page where users can add comments after visiting Pristina.</td>
        </tr>
        <tr>
            <td>User Authentication</td>
            <td>Implemented user authentication, allowing only logged-in users to add comments on the reviews page.</td>
        </tr>
        <tr>
            <td>Password Hash</td>
            <td>I ensured that user passwords are securely stored in the database by hashing them before storage. This approach enhances security by converting passwords into irreversible codes, significantly reducing the risk of unauthorized access or hacking attempts.</td>
        </tr>
        <tr>
            <td>Display Comments</td>
            <td>Comments added by users are displayed on the reviews page, sorted by the most recent ones.</td>
        </tr>
        <tr>
            <td>Admin Comment Management</td>
            <td>Enabled admin to easily delete comments from the database as needed, providing content moderation capabilities.</td>
        </tr>
    </table>

    <h2>On the Home Page:</h2>
    <p>Tasks Completed:</p>
    <table>
      <tr>
        <th>Title</th>
        <th>Description</th>
      </tr>
      <tr>
        <td>Made Navigation Bar</td>
        <td>Implemented a navigation bar for easy site navigation.</td>
      </tr>
      <tr>
        <td>Made Page Responsive</td>
        <td>Ensured the webpage adapts well to various screen sizes.</td>
      </tr>
      <tr>
        <td>Made Dropdown Menu</td>
        <td>Implemented a dropdown menu for additional navigation options.</td>
      </tr>
      <tr>
        <td>Added Text Box Overlaying Image</td>
        <td>
          Implemented a text box that overlays an image for visual emphasis.
        </td>
      </tr>
      <tr>
        <td>Added Three Boxes for Individual Project Part 2</td>
        <td>
          Outlined three boxes indicating what will be included in the project.
        </td>
      </tr>
    </table>

    <h2>On the Things to Do Pages:</h2>
    <p>Tasks Completed:</p>
    <table>
      <tr>
        <th>Title</th>
        <th>Description</th>
      </tr>
      <tr>
        <td>Added Slideshow of Images</td>
        <td>Created a slideshow of images with navigation controls.</td>
      </tr>
      <tr>
        <td>Added Maps</td>
        <td>Integrated maps for location information.</td>
      </tr>
    </table>

    <h2>On the Places to Visit Page:</h2>
    <p>Tasks Completed:</p>
    <table>
      <tr>
        <th>Title</th>
        <th>Description</th>
      </tr>
      <tr>
        <td>Added Slideshow of Images</td>
        <td>Created a slideshow of images with navigation controls.</td>
      </tr>
      <tr>
        <td>Added Maps</td>
        <td>Integrated maps for location information.</td>
      </tr>
    </table>

    <h2>About Us Page:</h2>
    <p>Tasks Completed:</p>
    <table>
      <tr>
        <th>Title</th>
        <th>Description</th>
      </tr>
      <tr>
        <td>Created About Us Page</td>
        <td>Provided information about the team or company.</td>
      </tr>
    </table>

    <h2>Contact Us Page:</h2>
    <p>Tasks Completed:</p>
    <table>
      <tr>
        <th>Title</th>
        <th>Description</th>
      </tr>
      <tr>
        <td>Created Contact Us Page</td>
        <td>Added a form or contact information for users to reach out.</td>
      </tr>
    </table>

    <h2>Additional Features:</h2>
    <p>Tasks Completed:</p>
    <table>
      <tr>
        <th>Title</th>
        <th>Description</th>
      </tr>
      <tr>
        <td>Implemented Footer</td>
        <td>Added a footer section for additional information or links.</td>
      </tr>
      <tr>
        <td>Added Interactive Elements</td>
        <td>Included interactive elements to enhance user experience.</td>
      </tr>
    </table>
<?php 
    include($path . "assets/inc/footer.php");

?>