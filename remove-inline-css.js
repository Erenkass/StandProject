import fs from 'fs/promises';
import fg from 'fast-glob';

const removeInlineCss = async (filePath) => {
    try {
        const data = await fs.readFile(filePath, 'utf8');

        // <style> etiketlerini temizle
        const cleanedData = data.replace(/<style[\s\S]*?<\/style>/g, '');

        await fs.writeFile(filePath, cleanedData, 'utf8');
        console.log(`Cleaned: ${filePath}`);
    } catch (err) {
        console.error(`Error processing ${filePath}:`, err);
    }
};

// Blade dosyalarındaki tüm <style> etiketlerini temizle
(async () => {
    try {
        const files = await fg('resources/views/**/*.blade.php');
        files.forEach(file => {
            removeInlineCss(file);
        });
    } catch (err) {
        console.error('Error finding files:', err);
    }
})();
