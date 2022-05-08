import { defineConfig } from "vite";
import vue from "@vitejs/plugin-vue";
import path from "path";

// https://vitejs.dev/config/
export default defineConfig({
	plugins: [vue()],
	resolve: {
		alias: {
			"@": path.resolve(__dirname, "src"),
		},
	},
  server: {
    port: parseInt(process.env.VITE_APP_SERVER_PORT || "8080"),
  },
});
