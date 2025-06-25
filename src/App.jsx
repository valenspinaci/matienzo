import Header from './components/Header';
import Footer from './components/Footer';
import AppRouter from './routes/AppRouter';

function App() {
  return (
    <>
      <Header/>
      <main>
        <AppRouter/>
      </main>
      <Footer/>
    </>
  )
}

export default App