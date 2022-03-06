CREATE VIEW get_projects_view AS
SELECT projects.*, project_images.original_image,
project_images.image_path
from projects
INNER JOIN project_images ON project_images.project_id = projects.id
GROUP BY projects.id