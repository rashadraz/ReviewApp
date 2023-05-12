import { useStateContext } from "../contexts/ContextProvider";

function Toast() {
  const { toast } = useStateContext();
  return (
    <>
      {toast.show && (
        <div className="w-[300px] py-2 px-3 animate-fade-in-down text-white rounded bg-emerald-500 z-50 fixed right-4 bottom-4">
          {toast.message}
        </div>
      )}
    </>
  );
}
export default Toast;
