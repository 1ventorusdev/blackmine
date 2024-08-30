import db from './firebase-config.js';

// Handle form submissions
document.getElementById('create-project-form').addEventListener('submit', async (event) => {
    event.preventDefault();
    const projectName = event.target.elements['project-name'].value;
    const userId = document.getElementById('user-id').value;
    await db.collection('projects').add({ name: projectName, owner: userId });
    alert('Project created!');
    window.location.href = 'list_projects.html';
});

// List projects
async function loadProjects() {
    const projectsList = document.getElementById('projects-list');
    const snapshot = await db.collection('projects').where("owner", "==", document.getElementById('user-id').value).get();
    snapshot.forEach(doc => {
        const project = doc.data();
        const listItem = document.createElement('li');
        listItem.textContent = project.name;
        projectsList.appendChild(listItem);
    });
}

// Load data on page load
if (document.getElementById('projects-list')) {
    loadProjects();
}
