
# College Course Selector

The College Course Selector is a web-based application built on Laravel, designed to help students easily select courses based on their desired credit load and difficulty level. This application simplifies the process of course registration by allowing students to filter and sort courses, ensuring they meet their academic requirements while also balancing their workload.

## Features

- Browse and search courses by department, course code, course title, or instructor
- Filter courses based on credit hours, difficulty level (easy, medium, hard), and schedule availability
- Create a personalized course schedule with a desired credit load
- View detailed course information, including course descriptions, prerequisites, and instructor details
- Save selected courses and generate a shareable schedule link
- Rate and review courses based on personal experience to help other students make informed decisions

## Installation

To install the College Course Selector, follow the instructions below:

1. Clone the repository to your local machine using `git clone https://github.com/Aniket-kr1030/CoursePlannerProto.git`
2. Navigate to the project directory using `cd CoursePlannerProto`
3. Install the required dependencies using `composer install`
4. Copy the `.env.example` file to create your own `.env` file using `cp .env.example .env`
5. Generate an application key using `php artisan key:generate`
6. Configure your database connection settings in the `.env` file
7. Run the database migrations and seed the sample data using `php artisan migrate --seed`
8. Start the development server using `php artisan serve`
9. Access the application in your browser at `http://localhost:8000`

## Usage

1. Visit the College Course Selector homepage.
2. Use the search and filter options to find courses based on your preferences and requirements.
3. Click on a course to view more information, such as the course description, prerequisites, and instructor details.
4. Add courses to your schedule by clicking the "Add to Schedule" button.
5. Review your selected courses and make any necessary adjustments.
6. Save your schedule and share the generated link with your academic advisor or friends.

## Contribution

We welcome contributions from the community. Please submit any bug reports, feature requests, or code contributions through the [GitHub repository](https://github.com/yourusername/college-course-selector).

## License

College Course Selector is released under the [MIT License](https://opensource.org/licenses/MIT).

## Support

If you encounter any issues or require assistance, please feel free to open an issue on the [GitHub repository](https://github.com/Aniket-kr1030/CoursePlannerProto.git/issues).
