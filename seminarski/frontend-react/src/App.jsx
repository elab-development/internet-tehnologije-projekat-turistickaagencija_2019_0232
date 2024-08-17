import { Route, Routes } from "react-router-dom";
import "./App.css";
import IndexPage from "./pages/IndexPage";
import LoginPage from "./pages/LoginPage";
import Layout from "./Layout";
import ProfilePage from "./pages/ProfilePage";
import PlacesFormPage from "./pages/PlacesFormPage";
import PlacesPage from "./pages/PlacesPage";

function App() {
    return (
      <UserContextProvider>
      <Routes>
          <Route path="/" element={<Layout />}>
              <Route index element={<IndexPage />} />
              <Route path="/login" element={<LoginPage />} />
              <Route path="/register" element={<RegisterPage />} />
              <Route path="/account" element={<ProfilePage />} />
              <Route path="/account/places" element={<PlacesPage />} />
                    <Route
                        path="/account/places/new"
                        element={<PlacesFormPage />}
                    />
                    <Route
                        path="/account/places/:id"
                        element={<PlacesFormPage />}
                    />
          </Route>
      </Routes>
  </UserContextProvider>
            );
}