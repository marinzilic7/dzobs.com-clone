import AOS from 'aos'
import 'aos/dist/aos.css'

export default ({ app }) => {
  if (process.client) {
    AOS.init({
      once: true, // Animacije se prikazuju samo jednom
      duration: 800 // Dužina trajanja animacije u milisekundama
    })
  }
}
