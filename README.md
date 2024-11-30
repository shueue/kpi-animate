# kpi-animate
WordPress project showcasing custom development with HTML, CSS, PHP, and JavaScript. Isolated from a larger site to demonstrate my contributions.

## Directory Structure
- **assets/**: Contains global styles and scripts for the KPI feature.
- **modules/**: Includes PHP logic and views for rendering KPIs within a WordPress environment.
  - `kpi/`: Handles primary KPI logic and display.
  - `kpis/`: Manages KPI variations.
- **working-example/**: A standalone demo showing the feature in action without requiring WordPress.
- **README.md**: Project overview, setup instructions, and contributions.

## How to Test
- To see the feature in action, open `working-example/index.html` in a browser.
- To integrate with WordPress:
  1. Place the `modules/` directory in your theme or plugin folder.
  2. Include the `view.php` files in a template file.
  3. Ensure dependencies from `assets/` are enqueued.
