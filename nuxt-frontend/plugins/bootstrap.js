export default defineNuxtPlugin((nuxtApp) => {
    // Provjerava je li okruženje klijent (browser) prije nego učita Bootstrap
    if (typeof window !== 'undefined') {
      import('bootstrap/dist/js/bootstrap.bundle.min.js').then(() => {
        console.log("Bootstrap JS loaded");
      }).catch((error) => {
        console.error("Bootstrap JS failed to load", error);
      });
    }
  });
